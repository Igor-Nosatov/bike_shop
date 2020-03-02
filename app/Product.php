<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'price', 'image','category_id','brand_id',
        'description_id','size_id','discipline_id','model_year_id',
        'brake_type_id','frame_material_id','gear_type_id','drivetrain_brand_id',
        'drivetrain_groupset_id','model_family_id','description_id',
    ];
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function brakeType()
    {
        return $this->belongsTo(BrakeType::class);
    }

    public function discipline()
    {
        return $this->belongsTo(Discipline::class);
    }

    public function drivetrainBrand()
    {
        return $this->belongsTo(DrivetrainBrand::class);
    }
    
    public function frameMaterial()
    {
        return $this->belongsTo(FrameMaterial::class);
    }

    public function gearType()
    {
        return $this->belongsTo(GearType::class);
    }

    public function modelFamily()
    {
        return $this->belongsTo(ModelFamily::class);
    }

    public function modelYear()
    {
        return $this->belongsTo(ModelYear::class);
    }

    public function Size()
    {
        return $this->belongsTo(Size::class);
    }

}
