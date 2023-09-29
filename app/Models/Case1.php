<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Case1 extends Model
{
    use HasFactory;
    protected $fillable = [
        'status', 'client', 'dob', 'coordinator', 'phone', 'email', 'fax', 'rn', 'rn_email', 'rn_fax',
    ];


    public function intake()
    {
        return $this->belongsTo(IntakeDemographic::class,'id','case_1_id');

    }
    public function case_2()
    {
        return $this->belongsTo(case2::class,'id','case1_id');

    }
    public function ClientDocumentStatus()
    {
        return $this->belongsTo(ClientDocumentStatus::class,'id','case_1_id');

    }
    public function ClientNurseToNurse()
    {
        return $this->belongsTo(ClientNurseToNurse::class,'id','case_1_id');

    }
    public function CommercialAirline()
    {
        return $this->belongsTo(CommercialAirline::class,'id','case_1_id');

    }
    public function DischargingFacility()
    {
        return $this->belongsTo(DischargingFacility::class,'id','case_1_id');

    }
    public function FlightDetail()
    {
        return $this->belongsTo(FlightDetail::class,'id','case_1_id');

    }
    public function FlyingAngels()
    {
        return $this->belongsTo(FlyingAngels::class,'id','case_1_id');

    }
    
    public function FlyingRule()
    {
        return $this->belongsTo(FlyingRule::class,'id','case_1_id');

    }
    public function GroundDetail()
    {
        return $this->belongsTo(GroundDetail::class,'id','case_1_id');

    }
   
    public function LoadingDetail()
    {
        return $this->belongsTo(LoadingDetail::class,'id','case_1_id');

    }
    
    public function MedicalNeed()
    {
        return $this->belongsTo(MedicalNeed::class,'id','case_1_id');

    }
    public function MedicalTreatment()
    {
        return $this->belongsTo(MedicalTreatment::class,'id','case_1_id');

    }
    public function PhysicanStatement()
    {
        return $this->belongsTo(PhysicanStatement::class,'id','case_1_id');

    }
    public function ReceivingFacility()
    {
        return $this->belongsTo(ReceivingFacility::class,'id','case_1_id');

    }
    public function ThirdPartyPayor()
    {
        return $this->belongsTo(ThirdPartyPayor::class,'id','case_1_id');

    }
    public function TravelInfo()
    {
        return $this->belongsTo(TravelInfo::class,'id','case_1_id');

    }
    public function TravelInstruction()
    {
        return $this->belongsTo(TravelInstruction::class,'id','case_1_id');

    }
}