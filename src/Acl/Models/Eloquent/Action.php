<?php namespace Alimfazeli\Acl\Models\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    /**
     * The attributes that are fillable via mass assignment.
     *
     * @var array
     */
    protected $fillable = ['controller', 'package', 'action', 'parent_id'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'actions';

}
