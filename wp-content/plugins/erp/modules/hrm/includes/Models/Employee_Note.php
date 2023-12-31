<?php

namespace WeDevs\ERP\HRM\Models;

use WeDevs\ERP\Framework\Model;

/**
 * Class Employee_Note
 */
class Employee_Note extends Model {
    protected $primaryKey = 'id';

    protected $table = 'erp_hr_employee_notes';

    protected $fillable = [ 'user_id', 'comment', 'comment_by' ];

    public function user() {
        return $this->belongsTo( '\WeDevs\ERP\HRM\Models\HrUser', 'comment_by' );
    }

    public function employee() {
        return $this->belongsTo( '\WeDevs\ERP\HRM\Models\Employee', 'user_id', 'user_id' );
    }
}
