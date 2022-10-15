<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function familiar()
    {
        return $this->hasOne(Familiar::class,'id', "familiar_id");
    }

    public function scopeFamiliaresPermitidos()
    {
        $familiar = auth()->user()->familiar;

        if ($familiar) {
            $perm =  $this->IDsPermitidos($familiar->id);

            $agregados = Familiar::where('agregado_de_id', $familiar->id)->get();
           foreach ($agregados as $agregado) {
               array_push($perm, $agregado->id);               
           }
           array_push($perm, $familiar->id);

            return $perm;

        } else {
            return [];
        }
    }

    public function IDsPermitidos($id)
    {
        $perm_array = [];

        $familiares = Familiar::where('genitor_familiar_id', $id)->get();
         foreach ($familiares as $familiar) {
             array_push($perm_array, $familiar->id);
             $agreg = Familiar::where('agregado_de_id', $familiar->id)->get();
                foreach ($agreg as $agregado) {
                    array_push($perm_array, $agregado->id);
                }
        }
        $sec_array = [];
        foreach ($perm_array as $fam_id){
            foreach ($this->IDsPermitidos($fam_id) as $sec_id){
                array_push($sec_array, $sec_id);
            }
        }

        $perm_array = array_merge($perm_array, $sec_array);
        return $perm_array;

    }

    // public function childrenCheckFromParentID($id) {

    //     $model = Bill::find($id)->children();
    //     $model = $model->doesntHave('children')->get();
    //     $withNoChildrenIds = [];
    //     foreach ($model as $item) {
    //         array_push($withNoChildrenIds, $item->id);
    //     }

    //     $model = Bill::find($id)->children();
    //     $model = $model->whereHas('children')->get();
    //     $withChildrenIds = [];
    //     foreach ($model as $item) {
    //         array_push($withChildrenIds, $item->id);
    //     }

    //     foreach ($withChildrenIds as $child) {
    //         $response = $this->childrenCheckFromParentID($child);
    //         foreach ($response['WithChildren'] as $with) {
    //             array_push($withChildrenIds, $with);
    //         }
    //         foreach ($response['WithNoChildren'] as $without) {
    //             array_push($withNoChildrenIds, $without);
    //         }
    //     }

    //     return ['WithNoChildren' => $withNoChildrenIds , 'WithChildren' =>  $withChildrenIds];
    // }
}
