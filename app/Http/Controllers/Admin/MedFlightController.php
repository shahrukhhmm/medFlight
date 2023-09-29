<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Case1;
use App\Models\Case2;
use App\Models\FlyingRule;
use App\Models\TravelInfo;
use App\Models\MedicalNeed;
use App\Models\FlightDetail;
use App\Models\FlyingAngels;
use App\Models\GroundDetail;
use Illuminate\Http\Request;
use App\Models\LoadingDetail;
use App\Models\ThirdPartyPayor;
use App\Models\MedicalTreatment;
use App\Models\CommercialAirline;
use App\Models\IntakeDemographic;
use App\Models\PhysicanStatement;
use App\Models\ReceivingFacility;
use App\Models\TravelInstruction;
use App\Models\ClientNurseToNurse;
use App\Models\DischargingFacility;
use App\Http\Controllers\Controller;
use App\Models\ClientDocumentStatus;
use Exception;
use Yajra\DataTables\DataTables;

class MedFlightController extends Controller
{
    public function index(Request $request){
        // $data = Case1::with('intakeDemographics')->get();

        // dd($data);

        return view('admin.medFlight.index');
    }


    public function medList(Request $request)
    {

        if ($request->ajax()) {
   
            $fromDate = $request->input('from_date');
            $toDate = $request->input('to_date');

            if($fromDate == null && $toDate == null){

                $data = Case1::with('intake')->get();

            }

            else{
                $data = Case1::with('intake')->whereBetween('created_at', [$fromDate, $toDate])->get();
            }

            return Datatables::of($data)
                ->addIndexColumn()

                ->addColumn('action', function ($row) {
                    $btn = '  <a class="btn btn-sm btn-danger p-2 mr-2" href="'.url('/admin/medFlight-delete/'.$row->id).'" role="button"><i class="fa fa-trash"></i></a>';
                    $btn = $btn . '  <a class="btn btn-sm  btn-dark p-2 mr-2" href="'.url('/admin/detail-page/'.$row->id).'" role="button"><i class="fa fa-eye"></i></a>';
                    $btn = $btn . '  <a class="btn btn-sm  btn-primary p-2 " href="'.url('/admin/update-page/'.$row->id).'" role="button"><i class="fa fa-pen"></i></a>';
                    return $btn;
                }) 

                ->addColumn('created', function ($row) {
        
                    $created_at = $row->created_at;
    
                    $formatted_date = Carbon::parse($created_at)->format('Y-m-d H:i:s');
                    return $formatted_date;
                })
                
                ->rawColumns(['action', 'created'])
                ->make(true); 
        }
    }

    // form
    public function form(Request $request){
        return view('admin.medFlight.form');
    }

    // submit form 

    public function medFormSubmit(Request $request){

        $case1_id = Case1::insertGetId([
            'status'=>$request->caseStatus,
            'client'=>$request->case_client,
            'dob'=>$request->case_dot,
            'coordinator'=>$request->case_coordinator,
            'phone'=>$request->case_phone,
            'email'=>$request->case_email,
            'fax'=>$request->case_fax,
            'rn'=>$request->case_rn,
            'rn_email'=>$request->case_rn_email,
            'rn_fax'=>$request->case_rn_fax,
            'created_at'=>now()
        ]);

        IntakeDemographic::insert([
            'case_1_id'=>$case1_id,
            'client_name'=>$request->intake_client_name,
            'dob'=>$request->intake_DOB,
            'age'=>$request->intake_age,
            'diagnosis'=>$request->intake_diagnosis,
            'height'=>$request->intake_height,
            'weight'=>$request->intake_weight,
            'contact_number'=>$request->intake_contact_number,
            'secondary_contact'=>$request->intake_secondary_contact,
            'contact_number_2'=>$request->intake_contact_number2,
            'relationship'=>$request->intake_relationship,
            'email'=>$request->intake_email,
            'other'=>$request->intake_other,
            'address'=>$request->intake_address,
            'client_rep'=>$request->intake_client_rep,
            'created_at'=>now()

        ]);

        ThirdPartyPayor::insert([
            'case_1_id'=>$case1_id,
            'company'=>$request->third_company,
            'contact'=>$request->third_contact,
            'phone'=>$request->third_phone,
            'email'=>$request->third_email,
            'address'=>$request->third_address,
            'additional_rep'=>$request->third_addtional_rep,
            'relevent_history'=>$request->third_relevant_history,
            'notes'=>$request->third_note,
            'created_at'=>now()

        ]);


        $case2_id=Case2::insertGetId([
            'case1_id'=>$case1_id,
            'status'=>$request->case2Status,
            'client_name'=>$request->case2_client_name,
            'dob'=>$request->case2_date_of_travel,
            'coordinator'=>$request->case_2_coordinator,
            'flight_rn'=>$request->case_2_flight_rn,

            'created_at'=>now()

        ]);

        DischargingFacility::insert([
            'case_1_id'=>$case1_id,
            'case_2_id'=>$case2_id,
            'present_location'=>$request->discharging_present_location,
            'phone'=>$request->discharging_phone,
            'address'=>$request->discharging_address,
            'city_state'=>$request->discharging_city_state,
            'room'=>$request->discharging_room,
            'zip'=>$request->discharging_zip,
            'unit'=>$request->discharging_unit,
            'unit_phone'=>$request->discharging_unit_phone,
            'attending_md'=>$request->discharging_attending_md,
            'fax'=>$request->discharging_fax,
            'admission_date'=>$request->discharging_admission_date,
            'discharge_date'=>$request->discharging_discharge_date,
            'other'=>$request->discharging_other,
            'created_at'=>now()


        ]);
    
        ReceivingFacility::insert([
            'case_1_id'=>$case1_id,
            'case_2_id'=>$case2_id,
            'destination'=>$request->recieving_destination,
            'phone'=>$request->recieving_phone,
            'address'=>$request->recieving_address,
            'city_state'=>$request->recieving_city_state,
            'room'=>$request->recieving_room,
            'zip'=>$request->recieving_zip,
            'contact_person'=>$request->recieving_contact_person,
            'phone2'=>$request->recieving_phone2,
            'attending_md'=>$request->recieving_attending_md,
            'other'=>$request->recieving_other,
            'created_at'=>now()

        ]);
    

        MedicalNeed::insert([
            'case_1_id'=>$case1_id,
            'case_2_id'=>$case2_id,
            'oxygen'=>$request->medical_oxygen,
            'spo2_target'=>$request->medical_sp02,
            'class_of_service'=>$request->medical_class_of_service,
            'sit_up_tolerance'=>$request->medical_sit_up,
            'econ_acceptable'=>$request->medical_econ,
            'staff_needed'=>$request->medical_staff_needed,
            'special_service_request'=>$request->medical_special_service,
            'oxygen_needed_during'=>$request->medical_oxygen_needed,
            'created_at'=>now()

        ]);

        TravelInfo::insert([
            'case_1_id'=>$case1_id,
            'case_2_id'=>$case2_id,
            'travel_date'=>$request->travel_date,
            'travel_hour'=>$request->travel_transport_hours,
            'travel_ftf_start_date'=>$request->travel_ftf_start_date,
            'travel_ftf_end_date'=>$request->travel_ftf_end_date,
            'depart_airport'=>$request->travel_darpart_airport,
            'arrive_airport'=>$request->travel_arrive_airport,
            'airline'=>$request->travel_airline,
            'depart_time'=>$request->travel_depart_time,
            'depart_facility'=>$request->travel_depart_facility,
            'arrive_time'=>$request->travel_arrive_time,
            'arrive_date'=>$request->travel_arrive_date,
            'created_at'=>now()

        ]);


        ClientDocumentStatus::insert([
            'case_1_id'=>$case1_id,
            'case_2_id'=>$case2_id,
            'fitness_check'=>$request->doc_fitness,
            'medfit_check'=>$request->doc_medfit,
            'dc_order_check'=>$request->doc_dcOrders,
            'constent_check'=>$request->doc_constent,
            'identification_check'=>$request->doc_identification,
            'other'=>$request->doc_other,
            'created_at'=>now()

        ]);

        ClientNurseToNurse::insert([
            'case_1_id'=>$case1_id,
            'case_2_id'=>$case2_id,
            'rn_name'=>$request->cl_nurse_rname,
            'date_time'=>$request->cl_nurse_date_time,
            'temp'=>$request->cl_nurse_temp,
            'hr'=>$request->cl_nurse_hr,
            'bp'=>$request->cl_nurse_bp,
            'rr'=>$request->cl_nurse_rr,
            'fio2'=>$request->cl_nurse_fio,
            'spo2'=>$request->cl_nurse_spo,
            'allergies'=>$request->cl_nurse_allergies,
            'nuero'=>$request->cl_nurse_nuero,
            'cv'=>$request->cl_nurse_cv,
            'pulm'=>$request->cl_nurse_pulm,
            'gl'=>$request->cl_nurse_gl,
            'gu'=>$request->cl_nurse_gu,
            'skin'=>$request->cl_nurse_skin,
            'analgesia'=>$request->cl_nurse_analgesia,
            'sedation'=>$request->cl_nurse_sedation,
            'iv'=>$request->cl_nurse_IV,
            'notes'=>$request->cl_nurse_notes,
            'created_at'=>now()
            
        ]);

        FlightDetail::insert([
            'case_1_id'=>$case1_id,
            'case_2_id'=>$case2_id,
            'rn_outbound'=>$request->fi_detail_rnOut,
            'client_rn'=>$request->fi_detail_client,
            'rn_return'=>$request->fi_detail_rnReturn,
            'notes'=>$request->fi_detail_notes,
            'created_at'=>now()

        ]);

        GroundDetail::insert([
            'case_1_id'=>$case1_id,
            'case_2_id'=>$case2_id,
            'departure'=>$request->gr_detail_departure,
            'arrival'=>$request->gr_detail_arrival,
            'notes'=>$request->gr_detail_notes,
            'created_at'=>now()
           
        ]);

        LoadingDetail::insert([
            'case_1_id'=>$case1_id,
            'case_2_id'=>$case2_id,
            'loading_1'=>$request->loading_detail_loading1,
            'loading_2'=>$request->loading_detail_loading2,
            'loading_3'=>$request->loading_detail_loading3,
            'created_at'=>now()
           
        ]);

        TravelInstruction::insert([
            'case_1_id'=>$case1_id,
            'case_2_id'=>$case2_id,
            'general'=>$request->travel_instruction_general,
            'loading_2'=>$request->travel_instruction_loading2,
            'loading_3'=>$request->travel_instruction_loading3,
            'created_at'=>now()
           
        ]);


        FlyingAngels::insert([
            'case_1_id'=>$case1_id,
            'case_2_id'=>$case2_id,
            'from'=>$request->flying_from,
            'to'=>$request->flying_to,
            'fax'=>$request->flying_fax,
            'pages'=>$request->flying_pages,
            'phone'=>$request->flying_phone,
            'date'=>$request->flying_date,
            're'=>$request->flying_re,
            'dear_name'=>$request->flying_dear_name,
            'facesheet_check'=>$request->flying_check1,
            'commercial_check'=>$request->flying_check2,
            'fitness_check'=>$request->flying_check3,
            'constent_check'=>$request->flying_check4,
            'photo_check'=>$request->flying_check5,
            'appropiate_check'=>$request->flying_check6,
            'other_check'=>$request->flying_check7,
            'other'=>$request->fyling_other,
            'please_check'=>$request->flying_check8,
            'comment'=>$request->flying_comment,
            'created_at'=>now()

        ]);

        CommercialAirline::insert([
            'case_1_id'=>$case1_id,
            'case_2_id'=>$case2_id,
            'passenger_name'=>$request->commercial_passenger_name,
            'discharging_md'=>$request->commercial_discharging_md,
            'discharging_facility'=>$request->commercial_discharging_facility,
            'rehab_unit'=>$request->commercial_rehab_unit,
            'unit_phone'=>$request->commercial_unit_phone,            
            'created_at'=>now()

        ]);

        FlyingRule::insert([
            'case_1_id'=>$case1_id,
            'case_2_id'=>$case2_id,
            'pre_diet_check'=>$request->pre_flight_check1,
            'pre_dvt_check'=>$request->pre_flight_check2,
            'pre_bowel_check'=>$request->pre_flight_check3,
            'pre_other_check'=>$request->pre_flight_check4,
            'in_oxygen_check'=>$request->in_flight_check1,
            'in_foley_check'=>$request->in_flight_check2,
            'iv_fluids'=>$request->in_flight_IV,
            'iv_fluid_check'=>$request->in_flight_check3,
            'solution'=>$request->in_flight_solution,
            'solution_check'=>$request->in_flight_check_solution,
            'rate_ml'=>$request->in_flight_rate,
            'rate_ml_check'=>$request->in_flight_check_rate,
            'in_other_check'=>$request->in_flight_check_other,
            'in_medication_check'=>$request->in_flight_check_mediHour,
            'in_hour'=>$request->in_flight_hour,
            'in_sedation_check'=>$request->in_flight_check_sedation,
            'in_analgesia_check'=>$request->in_flight_check_analgesia,
            'in_provider'=>$request->in_flight_provider,
            'in_signature'=>$request->in_flight_signature,
            'in_date'=>$request->in_flight_date,      
            'created_at'=>now()

        ]);



        PhysicanStatement::insert([
            'case_1_id'=>$case1_id,
            'case_2_id'=>$case2_id,
            'passenger_name'=>$request->physicians_passenger_name,
            'date_of_travel'=>$request->physicians_date_of_travel,
            'from'=>$request->physicians_from,
            'to'=>$request->physicians_to,
            'airline'=>$request->physicians_airline,
            'flight'=>$request->physicians_flight,
            'departure_time'=>$request->physicians_departure_time,
            'arival_time'=>$request->physicians_arrival_time,
            'discharging_facility'=>$request->physicians_descharging_facility,
            'discharging_md'=>$request->physicians_descharging_Md,
            'facility_address'=>$request->physicians_facility_address,
            'phone_number'=>$request->physicians_phone_number,
            'addmision_date'=>$request->physicians_admission_date,
            'diagnosis'=>$request->physicians_diagonsis,
            'ftf_from_date'=>$request->physicians_ftf_date,
            'class_of_service'=>$request->physicians_class_service,
            'economy'=>$request->physicians_economy,
            'passenger'=>$request->physicians_passenger_able,
            'oxygen_required'=>$request->physicians_oxygen_required,
            'oxygen_needed'=>$request->physicians_oxygen_needed,
            'sop2_target'=>$request->physicians_spo2_target,
            'attendant'=>$request->physicians_attendant_needed,
            'special_service'=>$request->physicians_service_request,
            'forseen'=>$request->physicians_foreseen_risk,
            'contagious'=>$request->physicians_contagious,
            'prognosis'=>$request->physicians_prognosis_trip,
            'facility'=>$request->physicians_facility,
            'address'=>$request->physicians_address,
            'physician_name'=>$request->physicians_physician_name,
            'signature'=>$request->physicians_signature,
            'date'=>$request->physicians_date,
            'created_at'=>now()

        ]);


        MedicalTreatment::insert([
            'case_1_id'=>$case1_id,
            'case_2_id'=>$case2_id,
            'name'=>$request->medical_treatment_name,
            'text2'=>$request->medical_treatment_name2,
            'from'=>$request->medical_treatment_air_transport_from,
            'to'=>$request->medical_treatment_air_transport_to,
            'from1'=>$request->medical_treatment_client_guardian_from,
            'to1'=>$request->medical_treatment_client_guardian_to,
            'client_signature'=>$request->hipaa_client_signature,
            'client_date'=>$request->hipaa_client_date,
            'guardian_signature'=>$request->hipaa_guardian_signature,
            'guardian_date'=>$request->hipaa_guardian_date,
            'created_at'=>now()

        ]);
        
        session()->flash('message', 'Data add successfully!');

        return redirect('/admin/med-flight');

    }

    // delete data 

    public function medDelete($id){
        $case1 = Case1::find($id);

        
        $IntakeDemographic = IntakeDemographic::where('case_1_id',$id)->first();
        
        $ThirdPartyPayor = ThirdPartyPayor::where('case_1_id',$id)->first();
        
        
        
        $Case2 = Case2::where('case1_id',$id)->first();
        
        
        $DischargingFacility = DischargingFacility::where('case_1_id',$id)->first();
        
        
        $ReceivingFacility = ReceivingFacility::where('case_1_id',$id)->first();
        
        
        $MedicalNeed = MedicalNeed::where('case_1_id',$id)->first();
        
        
        $TravelInfo = TravelInfo::where('case_1_id',$id)->first();
        
        
        $ClientDocumentStatus = ClientDocumentStatus::where('case_1_id',$id)->first();
        
        
        $ClientNurseToNurse = ClientNurseToNurse::where('case_1_id',$id)->first();
        

        $FlightDetail = FlightDetail::where('case_1_id',$id)->first();


        $GroundDetail = GroundDetail::where('case_1_id',$id)->first();


        $LoadingDetail = LoadingDetail::where('case_1_id',$id)->first();


        $TravelInstruction = TravelInstruction::where('case_1_id',$id)->first();



        $TravelInstruction = TravelInstruction::where('case_1_id',$id)->first();

        
        $FlyingAngels = FlyingAngels::where('case_1_id',$id)->first();
        
        
        $CommercialAirline = CommercialAirline::where('case_1_id',$id)->first();
        
        
        $FlyingRule = FlyingRule::where('case_1_id',$id)->first();
        
        
        $PhysicanStatement = PhysicanStatement::where('case_1_id',$id)->first();
        
        
        $MedicalTreatment = MedicalTreatment::where('case_1_id',$id)->first();
        
        $case1->delete();
        $IntakeDemographic->delete();
        $ThirdPartyPayor->delete();
        $Case2->delete();
        $DischargingFacility->delete();
        $ReceivingFacility->delete();
        $MedicalNeed->delete();
        $TravelInfo->delete();
        $ClientDocumentStatus->delete();
        $ClientNurseToNurse->delete();
        $FlightDetail->delete();
        $GroundDetail->delete();

        $LoadingDetail->delete();
        $TravelInstruction->delete();
        
        $TravelInstruction->delete();
        $FlyingAngels->delete();
        $CommercialAirline->delete();
        $FlyingRule->delete();
        $PhysicanStatement->delete();
        $MedicalTreatment->delete();

        session()->flash('message', 'Delete successfully!');

        return redirect()->back();

    }

    // detail data 

    public function detail($id){

        $data = Case1::with('case_2','ClientDocumentStatus','ClientNurseToNurse','CommercialAirline','DischargingFacility','FlightDetail','FlyingAngels','FlyingRule','GroundDetail','intake','LoadingDetail','MedicalNeed','MedicalTreatment','PhysicanStatement','ReceivingFacility','ThirdPartyPayor','TravelInfo','TravelInstruction','ReceivingFacility','PhysicanStatement','MedicalTreatment','MedicalNeed')->where('id',$id)->first();

        // dd($data);
        return view('admin.medFlight.detail',compact('data'));

    }

    // update 
    public function update($id){

        $data = Case1::with('case_2','ClientDocumentStatus','ClientNurseToNurse','CommercialAirline','DischargingFacility','FlightDetail','FlyingAngels','FlyingRule','GroundDetail','intake','LoadingDetail','MedicalNeed','MedicalTreatment','PhysicanStatement','ReceivingFacility','ThirdPartyPayor','TravelInfo','TravelInstruction','ReceivingFacility','PhysicanStatement','MedicalTreatment','MedicalNeed')->where('id',$id)->first();



        return view('admin.medFlight.update',compact('data'));

    }

    public function updateform(Request $request){

        $case1 = Case1::where('id', $request->case_1_id)->first();

        $case1->update([
            'status'=>$request->caseStatus,
            'client'=>$request->case_client,
            'dob'=>$request->case_dot,
            'coordinator'=>$request->case_coordinator,
            'phone'=>$request->case_phone,
            'email'=>$request->case_email,
            'fax'=>$request->case_fax,
            'rn'=>$request->case_rn,
            'rn_email'=>$request->case_rn_email,
            'rn_fax'=>$request->case_rn_fax,
        ]);

        $IntakeDemographic = IntakeDemographic::where('case_1_id', $request->case_1_id)->first();

        $IntakeDemographic->update([
            'client_name'=>$request->intake_client_name,
            'dob'=>$request->intake_DOB,
            'age'=>$request->intake_age,
            'diagnosis'=>$request->intake_diagnosis,
            'height'=>$request->intake_height,
            'weight'=>$request->intake_weight,
            'contact_number'=>$request->intake_contact_number,
            'secondary_contact'=>$request->intake_secondary_contact,
            'contact_number_2'=>$request->intake_contact_number2,
            'relationship'=>$request->intake_relationship,
            'email'=>$request->intake_email,
            'other'=>$request->intake_other,
            'address'=>$request->intake_address,
            'client_rep'=>$request->intake_client_rep
        ]);

        $ThirdPartyPayor = ThirdPartyPayor::where('case_1_id', $request->case_1_id)->first();

        $ThirdPartyPayor->update([
            'company'=>$request->third_company,
            'contact'=>$request->third_contact,
            'phone'=>$request->third_phone,
            'email'=>$request->third_email,
            'address'=>$request->third_address,
            'additional_rep'=>$request->third_addtional_rep,
            'relevent_history'=>$request->third_relevant_history,
            'notes'=>$request->third_note,

        ]);


        $case2_id = Case2::where('case1_id', $request->case_1_id)->first();

        $case2_id->update([
            'status'=>$request->case2Status,
            'client_name'=>$request->case2_client_name,
            'dob'=>$request->case2_date_of_travel,
            'coordinator'=>$request->case_2_coordinator,
            'flight_rn'=>$request->case_2_flight_rn,

        ]);

        
        $DischargingFacility = DischargingFacility::where('case_1_id', $request->case_1_id)->first();


        $DischargingFacility->update([
            'present_location'=>$request->discharging_present_location,
            'phone'=>$request->discharging_phone,
            'address'=>$request->discharging_address,
            'city_state'=>$request->discharging_city_state,
            'room'=>$request->discharging_room,
            'zip'=>$request->discharging_zip,
            'unit'=>$request->discharging_unit,
            'unit_phone'=>$request->discharging_unit_phone,
            'attending_md'=>$request->discharging_attending_md,
            'fax'=>$request->discharging_fax,
            'admission_date'=>$request->discharging_admission_date,
            'discharge_date'=>$request->discharging_discharge_date,
            'other'=>$request->discharging_other,

        ]);

        
        $ReceivingFacility = ReceivingFacility::where('case_1_id', $request->case_1_id)->first();

    
        $ReceivingFacility->update([
           
            'destination'=>$request->recieving_destination,
            'phone'=>$request->recieving_phone,
            'address'=>$request->recieving_address,
            'city_state'=>$request->recieving_city_state,
            'room'=>$request->recieving_room,
            'zip'=>$request->recieving_zip,
            'contact_person'=>$request->recieving_contact_person,
            'phone2'=>$request->recieving_phone2,
            'attending_md'=>$request->recieving_attending_md,
            'other'=>$request->recieving_other,
            
        ]);
    
        $MedicalNeed = MedicalNeed::where('case_1_id', $request->case_1_id)->first();

    

        $MedicalNeed->update([
           
            'oxygen'=>$request->medical_oxygen,
            'spo2_target'=>$request->medical_sp02,
            'class_of_service'=>$request->medical_class_of_service,
            'sit_up_tolerance'=>$request->medical_sit_up,
            'econ_acceptable'=>$request->medical_econ,
            'staff_needed'=>$request->medical_staff_needed,
            'special_service_request'=>$request->medical_special_service,
            'oxygen_needed_during'=>$request->medical_oxygen_needed,
           

        ]);
  
        $TravelInfo = TravelInfo::where('case_1_id', $request->case_1_id)->first();

        $TravelInfo->update([
            
            'travel_date'=>$request->travel_date,
            'travel_hour'=>$request->travel_transport_hours,
            'travel_ftf_start_date'=>$request->travel_ftf_start_date,
            'travel_ftf_end_date'=>$request->travel_ftf_end_date,
            'depart_airport'=>$request->travel_darpart_airport,
            'arrive_airport'=>$request->travel_arrive_airport,
            'airline'=>$request->travel_airline,
            'depart_time'=>$request->travel_depart_time,
            'depart_facility'=>$request->travel_depart_facility,
            'arrive_time'=>$request->travel_arrive_time,
            'arrive_date'=>$request->travel_arrive_date,
           

        ]);

        $ClientDocumentStatus = ClientDocumentStatus::where('case_1_id', $request->case_1_id)->first();

        $ClientDocumentStatus->update([
            
            'fitness_check'=>$request->doc_fitness,
            'medfit_check'=>$request->doc_medfit,
            'dc_order_check'=>$request->doc_dcOrders,
            'constent_check'=>$request->doc_constent,
            'identification_check'=>$request->doc_identification,
            'other'=>$request->doc_other,

        ]);

        $ClientNurseToNurse = ClientNurseToNurse::where('case_1_id', $request->case_1_id)->first();

        $ClientNurseToNurse->update([
            'rn_name'=>$request->cl_nurse_rname,
            'date_time'=>$request->cl_nurse_date_time,
            'temp'=>$request->cl_nurse_temp,
            'hr'=>$request->cl_nurse_hr,
            'bp'=>$request->cl_nurse_bp,
            'rr'=>$request->cl_nurse_rr,
            'fio2'=>$request->cl_nurse_fio,
            'spo2'=>$request->cl_nurse_spo,
            'allergies'=>$request->cl_nurse_allergies,
            'nuero'=>$request->cl_nurse_nuero,
            'cv'=>$request->cl_nurse_cv,
            'pulm'=>$request->cl_nurse_pulm,
            'gl'=>$request->cl_nurse_gl,
            'gu'=>$request->cl_nurse_gu,
            'skin'=>$request->cl_nurse_skin,
            'analgesia'=>$request->cl_nurse_analgesia,
            'sedation'=>$request->cl_nurse_sedation,
            'iv'=>$request->cl_nurse_IV,
            'notes'=>$request->cl_nurse_notes,
            'created_at'=>now()
            
        ]);

        $FlightDetail = FlightDetail::where('case_1_id', $request->case_1_id)->first();

        $FlightDetail->update([
            'rn_outbound'=>$request->fi_detail_rnOut,
            'client_rn'=>$request->fi_detail_client,
            'rn_return'=>$request->fi_detail_rnReturn,
            'notes'=>$request->fi_detail_notes,

        ]);

        $GroundDetail = GroundDetail::where('case_1_id', $request->case_1_id)->first();

        $GroundDetail->update([
            'departure'=>$request->gr_detail_departure,
            'arrival'=>$request->gr_detail_arrival,
            'notes'=>$request->gr_detail_notes,
           
        ]);
        $LoadingDetail = LoadingDetail::where('case_1_id', $request->case_1_id)->first();

        $LoadingDetail->update([
            'loading_1'=>$request->loading_detail_loading1,
            'loading_2'=>$request->loading_detail_loading2,
            'loading_3'=>$request->loading_detail_loading3,
           
        ]);

        $TravelInstruction = TravelInstruction::where('case_1_id', $request->case_1_id)->first();

        $TravelInstruction->update([
            'general'=>$request->travel_instruction_general,
            'loading_2'=>$request->travel_instruction_loading2,
            'loading_3'=>$request->travel_instruction_loading3,
        ]);


        $FlyingAngels = FlyingAngels::where('case_1_id', $request->case_1_id)->first();

        $FlyingAngels->update([
            'from'=>$request->flying_from,
            'to'=>$request->flying_to,
            'fax'=>$request->flying_fax,
            'pages'=>$request->flying_pages,
            'phone'=>$request->flying_phone,
            'date'=>$request->flying_date,
            're'=>$request->flying_re,
            'dear_name'=>$request->flying_dear_name,
            'facesheet_check'=>$request->flying_check1,
            'commercial_check'=>$request->flying_check2,
            'fitness_check'=>$request->flying_check3,
            'constent_check'=>$request->flying_check4,
            'photo_check'=>$request->flying_check5,
            'appropiate_check'=>$request->flying_check6,
            'other_check'=>$request->flying_check7,
            'other'=>$request->fyling_other,
            'please_check'=>$request->flying_check8,
            'comment'=>$request->flying_comment

        ]);

        
        $CommercialAirline = CommercialAirline::where('case_1_id', $request->case_1_id)->first();

        $CommercialAirline->update([
            'passenger_name'=>$request->commercial_passenger_name,
            'discharging_md'=>$request->commercial_discharging_md,
            'discharging_facility'=>$request->commercial_discharging_facility,
            'rehab_unit'=>$request->commercial_rehab_unit,
            'unit_phone'=>$request->commercial_unit_phone,            
        ]);

        
        $FlyingRule = FlyingRule::where('case_1_id', $request->case_1_id)->first();

        $FlyingRule->update([
            'pre_diet_check'=>$request->pre_flight_check1,
            'pre_dvt_check'=>$request->pre_flight_check2,
            'pre_bowel_check'=>$request->pre_flight_check3,
            'pre_other_check'=>$request->pre_flight_check4,
            'in_oxygen_check'=>$request->in_flight_check1,
            'in_foley_check'=>$request->in_flight_check2,
            'iv_fluids'=>$request->in_flight_IV,
            'iv_fluid_check'=>$request->in_flight_check3,
            'solution'=>$request->in_flight_solution,
            'solution_check'=>$request->in_flight_check_solution,
            'rate_ml'=>$request->in_flight_rate,
            'rate_ml_check'=>$request->in_flight_check_rate,
            'in_other_check'=>$request->in_flight_check_other,
            'in_medication_check'=>$request->in_flight_check_mediHour,
            'in_hour'=>$request->in_flight_hour,
            'in_sedation_check'=>$request->in_flight_check_sedation,
            'in_analgesia_check'=>$request->in_flight_check_analgesia,
            'in_provider'=>$request->in_flight_provider,
            'in_signature'=>$request->in_flight_signature,
            'in_date'=>$request->in_flight_date,      

        ]);

        
        $PhysicanStatement = PhysicanStatement::where('case_1_id', $request->case_1_id)->first();

        $PhysicanStatement->update([
            'passenger_name'=>$request->physicians_passenger_name,
            'date_of_travel'=>$request->physicians_date_of_travel,
            'from'=>$request->physicians_from,
            'to'=>$request->physicians_to,
            'airline'=>$request->physicians_airline,
            'flight'=>$request->physicians_flight,
            'departure_time'=>$request->physicians_departure_time,
            'arival_time'=>$request->physicians_arrival_time,
            'discharging_facility'=>$request->physicians_descharging_facility,
            'discharging_md'=>$request->physicians_descharging_Md,
            'facility_address'=>$request->physicians_facility_address,
            'phone_number'=>$request->physicians_phone_number,
            'addmision_date'=>$request->physicians_admission_date,
            'diagnosis'=>$request->physicians_diagonsis,
            'ftf_from_date'=>$request->physicians_ftf_date,
            'class_of_service'=>$request->physicians_class_service,
            'economy'=>$request->physicians_economy,
            'passenger'=>$request->physicians_passenger_able,
            'oxygen_required'=>$request->physicians_oxygen_required,
            'oxygen_needed'=>$request->physicians_oxygen_needed,
            'sop2_target'=>$request->physicians_spo2_target,
            'attendant'=>$request->physicians_attendant_needed,
            'special_service'=>$request->physicians_service_request,
            'forseen'=>$request->physicians_foreseen_risk,
            'contagious'=>$request->physicians_contagious,
            'prognosis'=>$request->physicians_prognosis_trip,
            'facility'=>$request->physicians_facility,
            'address'=>$request->physicians_address,
            'physician_name'=>$request->physicians_physician_name,
            'signature'=>$request->physicians_signature,
            'date'=>$request->physicians_date

        ]);

        
        $MedicalTreatment = MedicalTreatment::where('case_1_id', $request->case_1_id)->first();

        $MedicalTreatment->update([
            'name'=>$request->medical_treatment_name,
            'text2'=>$request->medical_treatment_name2,
            'from'=>$request->medical_treatment_air_transport_from,
            'to'=>$request->medical_treatment_air_transport_to,
            'from1'=>$request->medical_treatment_client_guardian_from,
            'to1'=>$request->medical_treatment_client_guardian_to,
            'client_signature'=>$request->hipaa_client_signature,
            'client_date'=>$request->hipaa_client_date,
            'guardian_signature'=>$request->hipaa_guardian_signature,
            'guardian_date'=>$request->hipaa_guardian_date
        ]);
        
        session()->flash('message', 'Update successfully!');

        return redirect('/admin/med-flight');
    }
    
}