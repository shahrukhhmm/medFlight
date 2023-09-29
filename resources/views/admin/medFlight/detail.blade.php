@extends('brackets/admin-ui::admin.layout.default')

@section('title', 'Med FLight')


{{-- @include('admin.components.styles') --}}
<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
crossorigin="anonymous" />


<style>
    span{
        font-weight: bold;
    }
</style>

@section('body')


    <div class="container">
        <h1>Case 1</h1>
        <div class="row">
            <div class="col-md-6">
                <span style="text-transform: uppercase">Client</span><p>{{ @$data->client }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">status</span><p>{{ $data->status }}</p>
            </div>
    
            <div class="col-md-6">
                <span style="text-transform: uppercase">dob</span><p>{{ $data->dob }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">coordinator</span><p>{{ $data->coordinator }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">phone</span><p>{{ $data->phone }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">email</span><p>{{ $data->email }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">fax</span><p>{{ $data->fax }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">rn</span><p>{{ $data->rn }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">rn email</span><p>{{ $data->rn_email }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">rn fax</span><p>{{ $data->rn_fax }}</p>
            </div>
          
        </div>


        <h1>Case 2</h1>
        <div class="row">
            <div class="col-md-6">
                <span style="text-transform: uppercase">client name</span><p>{{ @$data->case_2->client_name }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">status</span><p>{{ @$data->case_2->client_name }}</p>
            </div>
    
            <div class="col-md-6">
                <span style="text-transform: uppercase">dob</span><p>{{ @$data->case_2->dob }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">coordinator</span><p>{{ @$data->case_2->coordinator }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">flight rn</span><p>{{ @$data->case_2->flight_rn }}</p>
            </div>
    
        </div>



        <h1>Client Document Status</h1>
        <div class="row">
            <div class="col-md-6">
                <span style="text-transform: uppercase">fitness check </span><p>{{ @$data->ClientDocumentStatus->fitness_check }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">medfit check</span><p>{{ @$data->ClientDocumentStatus->medfit_check }}</p>
            </div>
         
            <div class="col-md-6">
                <span style="text-transform: uppercase">dc order  check</span><p>{{ @$data->ClientDocumentStatus->dc_order_check }}</p>
            </div>
         
            <div class="col-md-6">
                <span style="text-transform: uppercase">dc order  check</span><p>{{ @$data->ClientDocumentStatus->dc_order_check }}</p>
            </div>

            <div class="col-md-6">
                <span style="text-transform: uppercase">constent check</span><p>{{ @$data->ClientDocumentStatus->constent_check }}</p>
            </div>
         
            <div class="col-md-6">
                <span style="text-transform: uppercase">identification check</span><p>{{ @$data->ClientDocumentStatus->identification_check }}</p>
            </div>
         
            <div class="col-md-6">
                <span style="text-transform: uppercase">identification check</span><p>{{ @$data->ClientDocumentStatus->other }}</p>
            </div>
         
            <div class="col-md-6">
                <span style="text-transform: uppercase">identification check</span><p>{{ @$data->ClientDocumentStatus->other }}</p>
            </div>
         
        </div>

        <h1>Client Nurse To Nurse</h1>
        <div class="row">
            <div class="col-md-6">
                <span style="text-transform: uppercase">rn name </span><p>{{ @$data->ClientNurseToNurse->rn_name }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">date time</span><p>{{ @$data->ClientNurseToNurse->date_time }}</p>
            </div>
         
            <div class="col-md-6">
                <span style="text-transform: uppercase">temp</span><p>{{ @$data->ClientNurseToNurse->temp }}</p>
            </div>
         
            <div class="col-md-6">
                <span style="text-transform: uppercase">hr</span><p>{{ @$data->ClientNurseToNurse->hr }}</p>
            </div>

            <div class="col-md-6">
                <span style="text-transform: uppercase">bp</span><p>{{ @$data->ClientNurseToNurse->bp }}</p>
            </div>
         
            <div class="col-md-6">
                <span style="text-transform: uppercase">rr</span><p>{{ @$data->ClientNurseToNurse->rr }}</p>
            </div>
         
            <div class="col-md-6">
                <span style="text-transform: uppercase">fio2</span><p>{{ @$data->ClientNurseToNurse->fio2 }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">spo2</span>
                <p>{{ @$data->ClientNurseToNurse->spo2 }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">allergies</span>
                <p>{{ @$data->ClientNurseToNurse->allergies }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">nuero</span>
                <p>{{ @$data->ClientNurseToNurse->nuero }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">cv</span>
                <p>{{ @$data->ClientNurseToNurse->cv }}</p>
            </div>
         
            <div class="col-md-6">
                <span style="text-transform: uppercase">pulm</span>
                <p>{{ @$data->ClientNurseToNurse->pulm }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">gl</span>
                <p>{{ @$data->ClientNurseToNurse->gl }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">gu</span>
                <p>{{ @$data->ClientNurseToNurse->gu }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">skin</span>
                <p>{{ @$data->ClientNurseToNurse->skin }}</p>
            </div>
         
            <div class="col-md-6">
                <span style="text-transform: uppercase">analgesia</span>
                <p>{{ @$data->ClientNurseToNurse->analgesia }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">sedation</span>
                <p>{{ @$data->ClientNurseToNurse->sedation }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">iv</span>
                <p>{{ @$data->ClientNurseToNurse->iv }}</p>
            </div>
         
            <div class="col-md-6">
                <span style="text-transform: uppercase">notes</span>
                <p>{{ @$data->ClientNurseToNurse->notes }}</p>
            </div>
         
        </div>

        <h1>Commercial Airline</h1>
        <div class="row">
            <div class="col-md-6">
                <span style="text-transform: uppercase">passenger name </span><p>{{ @$data->CommercialAirline->passenger_name }}</p>
            </div>
         
            <div class="col-md-6">
                <span style="text-transform: uppercase">discharging md</span><p>{{ @$data->CommercialAirline->discharging_md }}</p>
            </div>
         
            <div class="col-md-6">
                <span style="text-transform: uppercase">discharging facility</span><p>{{ @$data->CommercialAirline->discharging_facility }}</p>
            </div>
         
            <div class="col-md-6">
                <span style="text-transform: uppercase"> rehab unit</span><p>{{ @$data->CommercialAirline->rehab_unit }}</p>
            </div>
         
            <div class="col-md-6">
                <span style="text-transform: uppercase">unit phone </span><p>{{ @$data->CommercialAirline->unit_phone }}</p>
            </div>
         
        </div>



        <h1>Discharging Facility</h1>
        <div class="row">
            <div class="col-md-6">
                <span style="text-transform: uppercase">present location </span><p>{{ @$data->DischargingFacility->present_location }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">phone </span><p>{{ @$data->DischargingFacility->phone }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">address </span><p>{{ @$data->DischargingFacility->address }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">city state </span><p>{{ @$data->DischargingFacility->city_state }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">room </span><p>{{ @$data->DischargingFacility->room }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">zip </span><p>{{ @$data->DischargingFacility->zip }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">unit </span><p>{{ @$data->DischargingFacility->unit }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">unit phone </span><p>{{ @$data->DischargingFacility->unit_phone }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">attending md </span><p>{{ @$data->DischargingFacility->attending_md }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">fax </span><p>{{ @$data->DischargingFacility->fax }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">admission date </span><p>{{ @$data->DischargingFacility->admission_date }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">admission date </span><p>{{ @$data->DischargingFacility->admission_date }}</p>
            </div>
         
        </div>

        <h1>Flight Detail</h1>
        <div class="row">
            <div class="col-md-6">
                <span style="text-transform: uppercase">rn outbound </span><p>{{ @$data->FlightDetail->rn_outbound }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">client rn </span><p>{{ @$data->FlightDetail->client_rn }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">rn return </span><p>{{ @$data->FlightDetail->rn_return }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">notes </span><p>{{ @$data->FlightDetail->notes }}</p>
            </div>
           
         
        </div>

        <h1>Flight Angels</h1>
        <div class="row">
            <div class="col-md-6">
                <span style="text-transform: uppercase">from </span><p>{{ @$data->FlyingAngels->from }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">to</span><p>{{ @$data->FlyingAngels->to }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">fax </span><p>{{ @$data->FlyingAngels->fax }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">pages </span><p>{{ @$data->FlyingAngels->pages }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">phone </span><p>{{ @$data->FlyingAngels->phone }}</p>
            </div>
           
            <div class="col-md-6">
                <span style="text-transform: uppercase">date </span><p>{{ @$data->FlyingAngels->date }}</p>
            </div>
           
            <div class="col-md-6">
                <span style="text-transform: uppercase">re </span><p>{{ @$data->FlyingAngels->re }}</p>
            </div>
           
            <div class="col-md-6">
                <span style="text-transform: uppercase">dear name </span><p>{{ @$data->FlyingAngels->dear_name }}</p>
            </div>
           
            <div class="col-md-6">
                <span style="text-transform: uppercase">facesheet check </span><p>{{ @$data->FlyingAngels->facesheet_check }}</p>
            </div>
           
            <div class="col-md-6">
                <span style="text-transform: uppercase">commercial check </span><p>{{ @$data->FlyingAngels->commercial_check }}</p>
            </div>
           
            <div class="col-md-6">
                <span style="text-transform: uppercase">fitness check </span><p>{{ @$data->FlyingAngels->fitness_check }}</p>
            </div>
           
            <div class="col-md-6">
                <span style="text-transform: uppercase">constent check</span><p>{{ @$data->FlyingAngels->constent_check }}</p>
            </div>
           
            <div class="col-md-6">
                <span style="text-transform: uppercase">photo check</span><p>{{ @$data->FlyingAngels->photo_check }}</p>
            </div>
           
            <div class="col-md-6">
                <span style="text-transform: uppercase">appropiate check</span><p>{{ @$data->FlyingAngels->appropiate_check }}</p>
            </div>
           
            <div class="col-md-6">
                <span style="text-transform: uppercase">other</span><p>{{ @$data->FlyingAngels->other }}</p>
            </div>
           
            <div class="col-md-6">
                <span style="text-transform: uppercase">other check</span><p>{{ @$data->FlyingAngels->other_check }}</p>
            </div>
           
            <div class="col-md-6">
                <span style="text-transform: uppercase">please check</span><p>{{ @$data->FlyingAngels->please_check }}</p>
            </div>
           
         
           
            <div class="col-md-6">
                <span style="text-transform: uppercase">comment</span><p>{{ @$data->FlyingAngels->comment }}</p>
            </div>
           
         
        </div>

        <h1>Flying Rule</h1>
        <div class="row">
            <div class="col-md-6">
                <span style="text-transform: uppercase">pre diet check </span><p>{{ @$data->FlyingRule->pre_diet_check }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">pre dvt check</span><p>{{ @$data->FlyingRule->pre_dvt_check }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">pre bowel check</span><p>{{ @$data->FlyingRule->pre_bowel_check }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">pre other check </span><p>{{ @$data->FlyingRule->pre_other_check }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">in oxygen check</span><p>{{ @$data->FlyingRule->in_oxygen_check }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">in foley check</span><p>{{ @$data->FlyingRule->in_foley_check }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">iv fluids</span><p>{{ @$data->FlyingRule->iv_fluids }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">iv fluid check </span><p>{{ @$data->FlyingRule->iv_fluid_check }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">solution </span><p>{{ @$data->FlyingRule->solution }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">solution check </span><p>{{ @$data->FlyingRule->solution_check }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">rate ml </span><p>{{ @$data->FlyingRule->rate_ml }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">rate ml check </span><p>{{ @$data->FlyingRule->rate_ml_check }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">in other check</span><p>{{ @$data->FlyingRule->in_other_check }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">in medication check</span><p>{{ @$data->FlyingRule->in_medication_check }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">hour </span><p>{{ @$data->FlyingRule->in_hour }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">in sedation check</span><p>{{ @$data->FlyingRule->in_sedation_check }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">in analgesia check </span><p>{{ @$data->FlyingRule->in_analgesia_check }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">in provider </span><p>{{ @$data->FlyingRule->in_provider }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">in signature </span><p>{{ @$data->FlyingRule->in_signature }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">in date </span><p>{{ @$data->FlyingRule->in_date }}</p>
            </div>
           
         
        </div>

        <h1>Ground Detail</h1>
        <div class="row">
            <div class="col-md-6">
                <span style="text-transform: uppercase">departure </span><p>{{ @$data->GroundDetail->departure }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">arrival </span><p>{{ @$data->GroundDetail->arrival }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">notes </span><p>{{ @$data->GroundDetail->notes }}</p>
            </div>
          
        </div>


        <h1>Intake</h1>
        <div class="row">
            <div class="col-md-6">
                <span style="text-transform: uppercase">departure </span><p>{{ @$data->intake->client_name }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">dob </span><p>{{ @$data->intake->dob }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">age </span><p>{{ @$data->intake->age }}</p>
            </div>
          
            <div class="col-md-6">
                <span style="text-transform: uppercase">diagnosis </span><p>{{ @$data->intake->diagnosis }}</p>
            </div>
          
          
            <div class="col-md-6">
                <span style="text-transform: uppercase">height </span><p>{{ @$data->intake->height }}</p>
            </div>
          
          
            <div class="col-md-6">
                <span style="text-transform: uppercase">weight </span><p>{{ @$data->intake->weight }}</p>
            </div>
          
          
            <div class="col-md-6">
                <span style="text-transform: uppercase">contact number </span><p>{{ @$data->intake->contact_number }}</p>
            </div>
          
            <div class="col-md-6">
                <span style="text-transform: uppercase">secondary contact </span><p>{{ @$data->intake->secondary_contact }}</p>
            </div>
          
            <div class="col-md-6">
                <span style="text-transform: uppercase">contact number 2 </span><p>{{ @$data->intake->contact_number_2 }}</p>
            </div>
          
          
            <div class="col-md-6">
                <span style="text-transform: uppercase">realtionship </span><p>{{ @$data->intake->relationship }}</p>
            </div>
          
            <div class="col-md-6">
                <span style="text-transform: uppercase">email </span><p>{{ @$data->intake->email }}</p>
            </div>
          
            <div class="col-md-6">
                <span style="text-transform: uppercase">other </span><p>{{ @$data->intake->other }}</p>
            </div>
          
            <div class="col-md-6">
                <span style="text-transform: uppercase">address </span><p>{{ @$data->intake->address }}</p>
            </div>
          
          
            <div class="col-md-6">
                <span style="text-transform: uppercase">client rep </span><p>{{ @$data->intake->client_rep }}</p>
            </div>
          
        </div>

        
        <h1>Loading Detail</h1>
        <div class="row">
            <div class="col-md-6">
                <span style="text-transform: uppercase">loading_1 </span><p>{{ @$data->intake->loading_1 }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">loading_2 </span><p>{{ @$data->intake->loading_2 }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">loading_3 </span><p>{{ @$data->intake->loading_3 }}</p>
            </div>
        
          
        </div>
        <h1>Medical Need</h1>
        <div class="row">
            <div class="col-md-6">
                <span style="text-transform: uppercase">oxygen </span><p>{{ @$data->MedicalNeed->oxygen }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">spo2_target </span><p>{{ @$data->MedicalNeed->spo2_target }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">class of service </span><p>{{ @$data->MedicalNeed->class_of_service }}</p>
            </div>
        
            <div class="col-md-6">
                <span style="text-transform: uppercase">sit up tolerance </span><p>{{ @$data->MedicalNeed->sit_up_tolerance }}</p>
            </div>
        
            <div class="col-md-6">
                <span style="text-transform: uppercase">econ acceptable</span><p>{{ @$data->MedicalNeed->econ_acceptable }}</p>
            </div>
        
            <div class="col-md-6">
                <span style="text-transform: uppercase">staff needed</span><p>{{ @$data->MedicalNeed->staff_needed }}</p>
            </div>
        
            <div class="col-md-6">
                <span style="text-transform: uppercase">special service request</span><p>{{ @$data->MedicalNeed->special_service_request }}</p>
            </div>
        
            <div class="col-md-6">
                <span style="text-transform: uppercase">oxygen needed during</span><p>{{ @$data->MedicalNeed->oxygen_needed_during }}</p>
            </div>
        
            <div class="col-md-6">
                <span style="text-transform: uppercase">oxygen needed during</span><p>{{ @$data->MedicalNeed->oxygen_needed_during }}</p>
            </div>
        
          
        </div>
        <h1>Medical Treatment</h1>
        <div class="row">
            <div class="col-md-6">
                <span style="text-transform: uppercase">name </span><p>{{ @$data->MedicalTreatment->name }}</p>
            </div>
            
            <div class="col-md-6">
                <span style="text-transform: uppercase">text2 </span><p>{{ @$data->MedicalTreatment->text2 }}</p>
            </div>
            
            <div class="col-md-6">
                <span style="text-transform: uppercase">from </span><p>{{ @$data->MedicalTreatment->from }}</p>
            </div>
            
            <div class="col-md-6">
                <span style="text-transform: uppercase">to </span><p>{{ @$data->MedicalTreatment->to }}</p>
            </div>
            
            
            <div class="col-md-6">
                <span style="text-transform: uppercase">from1 </span><p>{{ @$data->MedicalTreatment->from1 }}</p>
            </div>
            
            
            <div class="col-md-6">
                <span style="text-transform: uppercase">to1 </span><p>{{ @$data->MedicalTreatment->to1 }}</p>
            </div>
            
            <div class="col-md-6">
                <span style="text-transform: uppercase">client signature </span><p>{{ @$data->MedicalTreatment->client_signature }}</p>
            </div>
            
            <div class="col-md-6">
                <span style="text-transform: uppercase">client date </span><p>{{ @$data->MedicalTreatment->client_date }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">guardian signature </span><p>{{ @$data->MedicalTreatment->guardian_signature }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">guardian date </span><p>{{ @$data->MedicalTreatment->guardian_date }}</p>
            </div>
            
          
        </div>

        <h1>Physican Statement</h1>
        <div class="row">
            <div class="col-md-6">
                <span style="text-transform: uppercase">passenger name </span><p>{{ @$data->PhysicanStatement->passenger_name }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">date of travel </span><p>{{ @$data->PhysicanStatement->date_of_travel }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">from </span><p>{{ @$data->PhysicanStatement->from }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">to </span><p>{{ @$data->PhysicanStatement->to }}</p>
            </div>
            
            <div class="col-md-6">
                <span style="text-transform: uppercase">to </span><p>{{ @$data->PhysicanStatement->to }}</p>
            </div>
            
            <div class="col-md-6">
                <span style="text-transform: uppercase">airline </span><p>{{ @$data->PhysicanStatement->airline }}</p>
            </div>

            <div class="col-md-6">
                <span style="text-transform: uppercase">flight </span><p>{{ @$data->PhysicanStatement->flight }}</p>
            </div>
            

            <div class="col-md-6">
                <span style="text-transform: uppercase">departure time </span><p>{{ @$data->PhysicanStatement->departure_time }}</p>
            </div>

            <div class="col-md-6">
                <span style="text-transform: uppercase">arrival time </span><p>{{ @$data->PhysicanStatement->arrival_time }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">arrival time </span><p>{{ @$data->PhysicanStatement->arival_time }}</p>
            </div>

            <div class="col-md-6">
                <span style="text-transform: uppercase">discharging facility </span><p>{{ @$data->PhysicanStatement->discharging_facility }}</p>
            </div>
            
           

            <div class="col-md-6">
                <span style="text-transform: uppercase">discharging md</span><p>{{ @$data->PhysicanStatement->discharging_md }}</p>
            </div>
            

            <div class="col-md-6">
                <span style="text-transform: uppercase">facility address</span><p>{{ @$data->PhysicanStatement->facility_address }}</p>
            </div>

            <div class="col-md-6">
                <span style="text-transform: uppercase">phone_number</span><p>{{ @$data->PhysicanStatement->phone_number }}</p>
            </div>

            <div class="col-md-6">
                <span style="text-transform: uppercase">addmision date</span><p>{{ @$data->PhysicanStatement->addmision_date }}</p>
            </div>

            <div class="col-md-6">
                <span style="text-transform: uppercase">diagnosis</span><p>{{ @$data->PhysicanStatement->diagnosis }}</p>
            </div>

            <div class="col-md-6">
                <span style="text-transform: uppercase">ftf from date</span><p>{{ @$data->PhysicanStatement->ftf_from_date }}</p>
            </div>
            

            <div class="col-md-6">
                <span style="text-transform: uppercase">class of service</span><p>{{ @$data->PhysicanStatement->class_of_service }}</p>
            </div>
            

            <div class="col-md-6">
                <span style="text-transform: uppercase">economy</span><p>{{ @$data->PhysicanStatement->economy }}</p>
            </div>
            

            <div class="col-md-6">
                <span style="text-transform: uppercase">passenger</span><p>{{ @$data->PhysicanStatement->passenger }}</p>
            </div>

            <div class="col-md-6">
                <span style="text-transform: uppercase">oxygen required</span><p>{{ @$data->PhysicanStatement->oxygen_required }}</p>
            </div>

            <div class="col-md-6">
                <span style="text-transform: uppercase">oxygen needed</span><p>{{ @$data->PhysicanStatement->oxygen_needed }}</p>
            </div>

            <div class="col-md-6">
                <span style="text-transform: uppercase">sop2 target</span><p>{{ @$data->PhysicanStatement->sop2_target }}</p>
            </div>
            

            <div class="col-md-6">
                <span style="text-transform: uppercase">attendant</span><p>{{ @$data->PhysicanStatement->attendant }}</p>
            </div>

            <div class="col-md-6">
                <span style="text-transform: uppercase">special service</span><p>{{ @$data->PhysicanStatement->special_service }}</p>
            </div>

            <div class="col-md-6">
                <span style="text-transform: uppercase">for seen</span><p>{{ @$data->PhysicanStatement->forseen }}</p>
            </div>

            <div class="col-md-6">
                <span style="text-transform: uppercase">contagious</span><p>{{ @$data->PhysicanStatement->contagious }}</p>
            </div>

            <div class="col-md-6">
                <span style="text-transform: uppercase">prognosis</span><p>{{ @$data->PhysicanStatement->prognosis }}</p>
            </div>
            

            <div class="col-md-6">
                <span style="text-transform: uppercase">address</span><p>{{ @$data->PhysicanStatement->address }}</p>
            </div>

            <div class="col-md-6">
                <span style="text-transform: uppercase">address</span><p>{{ @$data->PhysicanStatement->address }}</p>
            </div>
            

            <div class="col-md-6">
                <span style="text-transform: uppercase">physician name</span><p>{{ @$data->PhysicanStatement->physician_name }}</p>
            </div>

            <div class="col-md-6">
                <span style="text-transform: uppercase">signature</span><p>{{ @$data->PhysicanStatement->signature }}</p>
            </div>

            <div class="col-md-6">
                <span style="text-transform: uppercase">date</span><p>{{ @$data->PhysicanStatement->date }}</p>
            </div>
          
        </div>

        <h1>Receiving Facility</h1>
        <div class="row">
            <div class="col-md-6">
                <span style="text-transform: uppercase">destination </span><p>{{ @$data->ReceivingFacility->destination }}</p>
            </div>

            <div class="col-md-6">
                <span style="text-transform: uppercase">phone </span><p>{{ @$data->ReceivingFacility->phone }}</p>
            </div>
         

            <div class="col-md-6">
                <span style="text-transform: uppercase">address </span><p>{{ @$data->ReceivingFacility->address }}</p>
            </div>
         
            <div class="col-md-6">
                <span style="text-transform: uppercase">city state </span><p>{{ @$data->ReceivingFacility->city_state }}</p>
            </div>

            <div class="col-md-6">
                <span style="text-transform: uppercase">room </span><p>{{ @$data->ReceivingFacility->room }}</p>
            </div>

            <div class="col-md-6">
                <span style="text-transform: uppercase">zip </span><p>{{ @$data->ReceivingFacility->zip }}</p>
            </div>

            <div class="col-md-6">
                <span style="text-transform: uppercase">contact person </span><p>{{ @$data->ReceivingFacility->contact_person }}</p>
            </div>

            <div class="col-md-6">
                <span style="text-transform: uppercase">phone2 </span><p>{{ @$data->ReceivingFacility->phone2 }}</p>
            </div>

            <div class="col-md-6">
                <span style="text-transform: uppercase">attending md </span><p>{{ @$data->ReceivingFacility->attending_md }}</p>
            </div>

            <div class="col-md-6">
                <span style="text-transform: uppercase">other </span><p>{{ @$data->ReceivingFacility->other }}</p>
            </div>
         
          
        </div>

        <h1>Third Party Payor</h1>
        <div class="row">
            <div class="col-md-6">
                <span style="text-transform: uppercase">company </span><p>{{ @$data->ThirdPartyPayor->company }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">contact </span><p>{{ @$data->ThirdPartyPayor->contact }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">phone </span><p>{{ @$data->ThirdPartyPayor->phone }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">email </span><p>{{ @$data->ThirdPartyPayor->email }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">address </span><p>{{ @$data->ThirdPartyPayor->address }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">additional rep </span><p>{{ @$data->ThirdPartyPayor->additional_rep }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">relevent history </span><p>{{ @$data->ThirdPartyPayor->relevent_history }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">other </span><p>{{ @$data->ThirdPartyPayor->other }}</p>
            </div>

           
        </div>

        <h1>Travel Info</h1>
        <div class="row">
            <div class="col-md-6">
                <span style="text-transform: uppercase">travel date </span><p>{{ @$data->TravelInfo->travel_date }}</p>
            </div>
  
            <div class="col-md-6">
                <span style="text-transform: uppercase">travel_hour </span><p>{{ @$data->TravelInfo->travel_hour }}</p>
            </div>
  
            <div class="col-md-6">
                <span style="text-transform: uppercase">travel ftf start date </span><p>{{ @$data->TravelInfo->travel_ftf_start_date }}</p>
            </div>
  
            <div class="col-md-6">
                <span style="text-transform: uppercase">travel ftf end date </span><p>{{ @$data->TravelInfo->travel_ftf_end_date }}</p>
            </div>

            <div class="col-md-6">
                <span style="text-transform: uppercase">depart airport </span><p>{{ @$data->TravelInfo->depart_airport }}</p>
            </div>

            <div class="col-md-6">
                <span style="text-transform: uppercase">arrive airport </span><p>{{ @$data->TravelInfo->arrive_airport }}</p>
            </div>

            <div class="col-md-6">
                <span style="text-transform: uppercase">airline </span><p>{{ @$data->TravelInfo->airline }}</p>
            </div>
  
            <div class="col-md-6">
                <span style="text-transform: uppercase">depart time </span><p>{{ @$data->TravelInfo->depart_time }}</p>
            </div>
  
            <div class="col-md-6">
                <span style="text-transform: uppercase">depart facility</span><p>{{ @$data->TravelInfo->depart_facility }}</p>
            </div>
  
            <div class="col-md-6">
                <span style="text-transform: uppercase">arrive time</span><p>{{ @$data->TravelInfo->arrive_time }}</p>
            </div>
  
            <div class="col-md-6">
                <span style="text-transform: uppercase">arrive date</span><p>{{ @$data->TravelInfo->arrive_date }}</p>
            </div>
  
        </div>

        <h1>TravelInstruction</h1>
        <div class="row">
            <div class="col-md-6">
                <span style="text-transform: uppercase">general </span><p>{{ @$data->TravelInstruction->general }}</p>
            </div>
            <div class="col-md-6">
                <span style="text-transform: uppercase">loading_2 </span><p>{{ @$data->TravelInstruction->loading_2 }}</p>
            </div>
  
            <div class="col-md-6">
                <span style="text-transform: uppercase">loading_3 </span><p>{{ @$data->TravelInstruction->loading_3 }}</p>
            </div>
  
         
        </div>
    </div>

@endsection 

