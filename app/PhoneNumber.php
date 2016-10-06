<?php
/**
 * Created by PhpStorm.
 * User: Sugito
 * Date: 9/10/2016
 * Time: 11:05 AM
 */

namespace App;

use \Illuminate\Database\Eloquent\Model;

/**
 * App\PhoneNumber
 *
 * @mixin \Eloquent
 * @property integer $id
 * @property integer $phone_provider_id
 * @property string $number
 * @property string $status
 * @property string $remarks
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $deleted_by
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property-read \App\PhoneProvider $provider
 * @method static \Illuminate\Database\Query\Builder|\App\PhoneNumber whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\PhoneNumber wherePhoneProviderId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\PhoneNumber whereNumber($value)
 * @method static \Illuminate\Database\Query\Builder|\App\PhoneNumber whereStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\PhoneNumber whereRemarks($value)
 * @method static \Illuminate\Database\Query\Builder|\App\PhoneNumber whereCreatedBy($value)
 * @method static \Illuminate\Database\Query\Builder|\App\PhoneNumber whereUpdatedBy($value)
 * @method static \Illuminate\Database\Query\Builder|\App\PhoneNumber whereDeletedBy($value)
 * @method static \Illuminate\Database\Query\Builder|\App\PhoneNumber whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\PhoneNumber whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\PhoneNumber whereDeletedAt($value)
 */
class PhoneNumber extends Model
{
	protected $table = 'phone';

	protected $fillable = ['phone_provider_id', 'number', 'status', 'remarks'];

    public function provider()
    {
    	return $this->belongsTo('App\PhoneProvider', 'phone_provider_id');
    }
}