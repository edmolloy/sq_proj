<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * Returns all entries from DB::listings that belong to $this user.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function listings() {
        return $this->hasMany(Listing::class);
    }


    /**
     * Returns all entries from DB::listings_on_watch that belong to $this user
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function listingsOnWatch() {
        return $this->hasMany(ListingOnWatch::class);
    }


    /**
     * Returns all entries from DB::desired_listings that belong to $this user.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function desiredListings() {
        return $this->hasMany(DesiredListing::class);
    }


    /**
     * Returns all entries from DB::bought_listings that belong to $this user.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function boughtListings() {
        return $this->hasMany(BoughtListing::class);
    }


}
