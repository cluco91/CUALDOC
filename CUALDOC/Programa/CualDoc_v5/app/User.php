<?php namespace CualDocs;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword, SoftDeletes; /*Aqui agregue SoftDeletes*/

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];
	protected $dates = ['deleted_at'];

	/*Metodo para especificar contraseña cada vez que esta sea cambiada*/

	public function setPasswordAtribute($valor){
		/*Si el valor recibido no esta vacio, entonces debemos cambiar la contraseña */
		if (!empty($valor)){

			/*Hash es para que podamos encriptar la contraseña*/
			$this->attributes['password'] = \Hash::make($valor);
		}
	}

}
