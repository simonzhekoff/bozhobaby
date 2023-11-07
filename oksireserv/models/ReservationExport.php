<?php namespace Buzz\Oksireserv\Models;

use Backend\Facades\BackendAuth;
use Backend\Models\ExportModel;
use Config;

/**
 * Model
 */
class ReservationExport extends ExportModel
{


    /**
     * @var string table in the database used by the model.
     */
    public $table = 'buzz_oksireserv_reservations';

    public $dates = ['created_at', 'updated_at', 'deleted_at'];

    public $belongsTo = [
        'status' => 'Buzz\Oksireserv\Models\Status',
    ];

    public $fillable = [
        'status_enabled', 'status',
    ];

    /**
     * Prepare data for export.
     *
     * @param $columns
     * @param $sessionKey
     *
     * @return array
     */
    public function exportData($columns, $sessionKey = null)
    {
        $query = Reservation::query();

        // filter by status
        if ($this->status_enabled) {
            $query->where('status_id', $this->status_id);
        }

        // prepare columns
        $reservations = $query->get();
        $reservations->each(function($item) use ($columns)
        {
            $item->addVisible($columns);
            $item->status_id = $item->status->name;
        });

        return $reservations->toArray();
    }

    /**
     * Get all available statuses.
     *
     * @return mixed
     */
    public static function getStatusIdOptions()
    {
        return Status::orderBy('sort_order')->lists('name', 'id');
    }

}
