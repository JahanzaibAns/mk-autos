<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'spec_id',
        'door_id',
        'seat_id',
        'bag_id',
        'transmission_id',
        'fuel_type_id',
        'body_type_id',
        'make_year_id',
        'model_id',
        'slug',
        'description',
        'feature_image',
        'car_location',
        'min_days_booking',
        'delivery_charges',
        'delivery_days',
        'start_date',
        'end_date',
        'security_deposit',
        'car_engine_size',
        'insurance',
        'car_condition',
        'horse_power',
        'mileage',
        'interior_color',
        'exterior_color',
        'is_featured',
        'status',
    ]; 

    // Relations
    public function prices()
    {
        return $this->hasMany(CarPrice::class);
    }

    public function images()
    {
        return $this->hasMany(CarImage::class);
    }

    public function features()
    {
        return $this->belongsToMany(Feature::class, 'car_features');
    }

    public function interiorColor()
    {
        return $this->belongsTo(Color::class, 'interior_color');
    }

    public function exteriorColor()
    {
        return $this->belongsTo(Color::class, 'exterior_color');
    }

    public function spec()
    {
        return $this->belongsTo(Spec::class);
    }

    public function door()
    {
        return $this->belongsTo(Door::class);
    }

    public function seat()
    {
        return $this->belongsTo(Seat::class);
    }

    public function bag()
    {
        return $this->belongsTo(Bag::class);
    }

    public function transmission()
    {
        return $this->belongsTo(Transmission::class);
    }

    public function fuelType()
    {
        return $this->belongsTo(FuelType::class);
    }

    public function bodyType()
    {
        return $this->belongsTo(BodyType::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'car_category');
    }

    public function makeYear()
    {
        return $this->belongsTo(MakeYear::class);
    }

    public function model()
    {
        return $this->belongsTo(CarModel::class);
    }
}
