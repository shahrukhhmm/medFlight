@extends('brackets/admin-ui::admin.layout.default')

@section('title', 'Med FLight')


{{-- @include('admin.components.styles') --}}
<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
crossorigin="anonymous" />

<style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    .part {
      border: 1px solid #c6c6c6;
      border-radius: 10px;
    }
    input[type="date"]:in-range::-webkit-datetime-edit-year-field,
    input[type="date"]:in-range::-webkit-datetime-edit-month-field,
    input[type="date"]:in-range::-webkit-datetime-edit-day-field,
    input[type="date"]:in-range::-webkit-datetime-edit-text {
    color: transparent;
    }
    .form-group {
      position: relative;
      margin: 20px 0 30px;
      border: none;
    }
    .form-group input,
    .form-group textarea {
        display: block;
        width: 100%;
        background-color: transparent;
        border: 0;
        border-bottom: 2px solid rgb(0, 0, 0);
        color: rgb(0, 0, 0);
        padding: 8px 0;
        font-size: 1rem;
    }
    .form-group input:active,
    .form-group input:focus,
    .form-group input:valid,
    .form-group textarea:active,
    .form-group textarea:focus,
    .form-group textarea:valid + label span {
        outline: 0;
        box-shadow: none;
        background: none;
        border: 0;
        border-bottom: 2px solid rgb(133, 128, 128);
        text-decoration: underline;
        border-radius: 5px;
    }
    .form-group label {
      position: absolute;
      top: 10px;
      left: 0px;
      color: rgb(0, 0, 0);
      font-size: 0.9rem;
      text-transform: uppercase;
      letter-spacing: 1px;
      z-index: -1;
    }

    .form-group label span {
      display: inline-block;
      font-size: 0.9rem;
      transition: 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
      z-index: 1;
    }

    .form-group input:active + label span,
    .form-group input:focus + label span,
    .form-group input:valid + label span,
    .form-group textarea:active + label span,
    .form-group textarea:focus + label span,
    .form-group textarea:valid + label span {
      color: rgb(161, 170, 175);
      font-size: 14px;
      transform: translateY(-30px);
    }
    .form-control:focus {
      box-shadow: none;
    }
    .form-heading h3 {
      background-color: rgb(19, 17, 17);
      color: #c4ac91;
      width: 100%;
      font-size: 20px;
      padding: 10px 10px;
      border-radius: 10px 10px 0px 0px;
      letter-spacing: 2px;
    }
</style>


@section('body')
<div class="container">
    <form action="{{ url('/admin/update-form') }}" method="post">

      @csrf

      <div class="part my-3">
        <div class="form-heading">
          <h3 class="text-center display-5">RN MEDFLIGHT FORM</h3>
        </div>
        <div class="row my-2">
          <div class="col-12 text-center">
            <input
            type="hidden"
            class="form-control"
            name="case_1_id"
            value="{{ $data->id }}"
            required />
            Case Status :
            <div class="btn-group" data-toggle="buttons">
              <label class="btn btn-secondary btn-small">
                <input type="radio" name="caseStatus" value="active" />
                Active
              </label>
              <label class="btn btn-dark btn-small">
                <input type="radio" name="caseStatus" value="final" /> Final
              </label>
            </div>
          </div>
        </div>
        <div class="row my-3 py-3 mx-2">
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                name="case_client"
                value="{{ $data->client }}"
                required />
              <label>Client</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input type="date" class="form-control"   value="{{ $data->dob }}" name="case_dot" required />
              <label>Date-of-travel</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                required
                value="{{ $data->coordinator }}"
                name="case_coordinator" />
              <label>Coordinator</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="tel"
                class="form-control"
                required
                value="{{ $data->phone }}"
                name="case_phone" />
              <label>Phone</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="email"
                class="form-control"
                required
                value="{{ $data->email }}"
                name="case_email" />
              <label>Email</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                required
                value="{{ $data->fax }}"
                name="case_fax" />
              <label>Fax</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                required   value="{{ $data->rn }}"
                name="case_rn" />
              <label>RN(s)</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="email"
                class="form-control"
                required
                value="{{ $data->rn_email }}"
                name="case_rn_email" />
              <label>RN-Email</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                required
                value="{{ $data->rn_fax }}"
                name="case_rn_fax" />
              <label>RN-Fax</label>
            </div>
          </div>
        </div>
      </div>

      <!-- intake and demographics -->
      <div class="part my-3">
        <div class="form-heading">
          <h3>*Intake and Demographics</h3>
        </div>
        <div class="row my-3 py-3 mx-2">
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                value="{{ $data->intake->client_name }}"
                name="intake_client_name"
                required />
              <label>Client Name</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="date"
                class="form-control"
                name="intake_DOB"
                value="{{ $data->intake->dob }}"
                id="dob"
                required />
              <label>DOB</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                id="age"
                value="{{ $data->intake->age }}"
                class="form-control"
                required
                name="intake_age" />
              <label>Age</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                required
                value="{{ $data->intake->diagnosis }}"
                name="intake_diagnosis" />
              <label>Diagnosis</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                required value="{{ $data->intake->height }}"
                name="intake_height" />
              <label>Height</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                required value="{{ $data->intake->weight }}"
                name="intake_weight" />
              <label>Weight(kgs)</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="tel"
                class="form-control"
                required
                value="{{ $data->intake->contact_number }}"
                name="intake_contact_number" />
              <label>Contact-number</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="tel"
                class="form-control"
                required
                value="{{ $data->intake->secondary_contact }}"
                name="intake_secondary_contact" />
              <label>Secondary-contact</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="tel"
                class="form-control"
                required
                value="{{ $data->intake->contact_number_2 }}"
                name="intake_contact_number2" />
              <label>Contact-number</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                required
                value="{{ $data->intake->relationship }}"
                name="intake_relationship" />
              <label>Relationship</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="email"
                class="form-control"
                required
                value="{{ $data->intake->email }}"
                name="intake_email" />
              <label>email</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                required
                value="{{ $data->intake->other }}"
                name="intake_other" />
              <label>Other</label>
            </div>
          </div>
          <div class="col-md-12 col-sm-12">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                required
                value="{{ $data->intake->address }}"
                name="intake_address" />
              <label>Address</label>
            </div>
          </div>
          <div class="col-md-12 col-sm-12">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                required
                value="{{ $data->intake->client_rep }}"
                name="intake_client_rep" />
              <label>Client Rep</label>
            </div>
          </div>
        </div>
      </div>

      <!-- third party payor -->
      <div class="part my-3">
        <div class="form-heading">
          <h3>*Third Party Payor</h3>
        </div>
        <div class="row my-3 py-3 mx-2">
          <div class="col-md-12 col-sm-12">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                name="third_company"
                value="{{ $data->ThirdPartyPayor->company }}"
                required />
              <label>Company </label>
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
            <div class="form-group">
              <input
                type="tel"
                class="form-control"
                name="third_contact"
                value="{{ $data->ThirdPartyPayor->contact }}"
                required />
              <label>Contact</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="tel"
                class="form-control" value="{{ $data->ThirdPartyPayor->phone }}"
                required
                name="third_phone" />
              <label>Phone</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text" 
                value="{{ $data->ThirdPartyPayor->email }}"
                class="form-control"
                required
                name="third_email" />
              <label>Email</label>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                value="{{ $data->ThirdPartyPayor->address }}"
                required
                name="third_address" />
              <label>Address</label>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                value="{{ $data->ThirdPartyPayor->additional_rep }}"
                required
                name="third_addtional_rep" />
              <label>Additional-Rep</label>
            </div>
          </div>
          <div class="col-md-12 col-sm-12">
            <div class="form-group">
              <textarea
                name="third_relevant_history"
                class="form-control"
                
                rows="5"
                required>{{ $data->ThirdPartyPayor->relevent_history }}</textarea>

              <label>Relevent-history</label>
            </div>
          </div>
          <div class="col-md-12 col-sm-12">
            <div class="form-group">
              <textarea
                name="third_note"
                class="form-control"
                rows="5"
                required>{{ $data->ThirdPartyPayor->notes }}</textarea>

              <label>Notes</label>
            </div>
          </div>
        </div>
      </div>

      <!-- case 2 -->

      <div class="part my-3">
        <div class="form-heading">
          <h3 class="text-center display-5">Case 2</h3>
        </div>
        <div class="row my-2">
          <div class="col-12 text-center">
            Case Status :
            <div class="btn-group" data-toggle="buttons">
              <label class="btn btn-secondary btn-small">
                <input type="radio" name="case2Status" value="active" />
                Active
              </label>
              <label class="btn btn-dark btn-small">
                <input type="radio" name="case2Status" value="final" /> Final
              </label>
            </div>
          </div>
        </div>
        <div class="row my-3 py-3 mx-2">
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                name="case2_client_name"
                value="{{ $data->case_2->client_name }}"
                required />
              <label>Client-Name</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="date"
                class="form-control"
                value="{{ $data->case_2->dob }}"
                name="case2_date_of_travel"
                required />
              <label>Date-of-travel</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                value="{{ $data->case_2->coordinator }}"
                required
                name="case_2_coordinator" />
              <label>Coordinator</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="tel"
                class="form-control"
                required
                value="{{ $data->case_2->flight_rn }}"
                name="case_2_flight_rn" />
              <label>Flight-Rn</label>
            </div>
          </div>
        </div>
      </div>

      <!-- Discahrging facility -->

      <div class="part my-3">
        <div class="form-heading">
          <h3>*Discharging Facility</h3>
        </div>
        <div class="row my-3 py-3 mx-2">
          <div class="col-md-6 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                name="discharging_present_location"
                value="{{ $data->DischargingFacility->present_location }}"
                required />
              <label>Present-Location</label>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="form-group">
              <input
                type="tel"
                class="form-control"
                value="{{ $data->DischargingFacility->phone }}"
                name="discharging_phone"
                required />
              <label>Phone</label>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                required
                value="{{ $data->DischargingFacility->address }}"
                name="discharging_address" />
              <label>Address</label>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                required
                value="{{ $data->DischargingFacility->city_state }}"
                name="discharging_city_state" />
              <label>City,State</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                required
                value="{{ $data->DischargingFacility->room }}"
                name="discharging_room" />
              <label>Room</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                value="{{ $data->DischargingFacility->zip }}"
                required
                name="discharging_zip" />
              <label>Zip</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                required
                value="{{ $data->DischargingFacility->unit }}"
                name="discharging_unit" />
              <label>Unit</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                required
                value="{{ $data->DischargingFacility->unit_phone }}"
                name="discharging_unit_phone" />
              <label>Unit phone</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                value="{{ $data->DischargingFacility->attending_md }}"
                required
                name="discharging_attending_md" />
              <label>Attending-MD</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                value="{{ $data->DischargingFacility->fax }}"
                required
                name="discharging_fax" />
              <label>Fax</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="date"
                class="form-control"
                required
                value="{{ $data->DischargingFacility->admission_date }}"
                name="discharging_admission_date" />
              <label>Admission-Date</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="date"
                class="form-control"
                required
                value="{{ $data->DischargingFacility->discharge_date }}"
                name="discharging_discharge_date" />
              <label>Discharge-date</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                required
                value="{{ $data->DischargingFacility->other }}"
                name="discharging_other" />
              <label>Other</label>
            </div>
          </div>
        </div>
      </div>

      <!-- recieving facility -->

      <div class="part my-3">
        <div class="form-heading">
          <h3>*Recieving Facility</h3>
        </div>
        <div class="row my-3 py-3 mx-2">
          <div class="col-md-6 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                name="recieving_destination"
                value="{{ $data->ReceivingFacility->destination }}"
                required />
              <label>Destination</label>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="form-group">
              <input
                type="tel"
                class="form-control"
                name="recieving_phone"
                value="{{ $data->ReceivingFacility->phone }}"
                required />
              <label>Phone</label>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                required
                value="{{ $data->ReceivingFacility->address }}"
                name="recieving_address" />
              <label>Address</label>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                required
                value="{{ $data->ReceivingFacility->city_state }}"
                name="recieving_city_state" />
              <label>City,State</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                value="{{ $data->ReceivingFacility->room }}"
                required
                name="recieving_room" />
              <label>Room</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                required
                value="{{ $data->ReceivingFacility->zip }}"
                name="recieving_zip" />
              <label>Zip</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                required
                value="{{ $data->ReceivingFacility->contact_person }}"
                name="recieving_contact_person" />
              <label>Contact-Person</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                required
                value="{{ $data->ReceivingFacility->phone2 }}"
                name="recieving_phone2" />
              <label>phone</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                required
                value="{{ $data->ReceivingFacility->attending_md }}"
                name="recieving_attending_md" />
              <label>Attending-MD</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                value="{{ $data->ReceivingFacility->other }}"
                required
                name="recieving_other" />
              <label>Other</label>
            </div>
          </div>
        </div>
      </div>

      <!-- Medical Needs -->

      <div class="part my-3">
        <div class="form-heading">
          <h3>*Medical Needs</h3>
        </div>
        <div class="row my-3 py-3 mx-2">
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                value="{{ $data->MedicalNeed->oxygen }}"
                name="medical_oxygen"
                required />
              <label>Oxygen</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="tel"
                class="form-control"
                value="{{ $data->MedicalNeed->spo2_target }}"
                name="medical_sp02"
                required />
              <label>Sp02-Target</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                required
                value="{{ $data->MedicalNeed->class_of_service }}"
                name="medical_class_of_service" />
              <label>Class-Of-Service</label>
            </div>
          </div>

          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                required
                value="{{ $data->MedicalNeed->sit_up_tolerance }}"
                name="medical_sit_up" />
              <label>Sit-up-Tolerance</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                required
                value="{{ $data->MedicalNeed->econ_acceptable }}"
                name="medical_econ" />
              <label>Econ-Acceptable</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                required
                value="{{ $data->MedicalNeed->staff_needed }}"
                name="medical_staff_needed" />
              <label> Staff-needed</label>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                required
                value="{{ $data->MedicalNeed->special_service_request }}"
                name="medical_special_service" />
              <label> Special-Service-Request</label>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                required
                value="{{ $data->MedicalNeed->oxygen_needed_during }}"
                name="medical_oxygen_needed" />
              <label>Oxygen-needed-during</label>
            </div>
          </div>
        </div>
      </div>

      <!-- Travel info -->

      <div class="part my-3">
        <div class="form-heading">
          <h3>*Travel Info</h3>
        </div>
        <div class="row my-3 py-3 mx-2">
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="date"
                class="form-control"
                name="travel_date"
                value="{{ $data->TravelInfo->travel_date }}"
                required />
              <label>Travel-date</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                value="{{ $data->TravelInfo->travel_hour }}"
                name="travel_transport_hours"
                required />
              <label>Travel-hours</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="date"
                class="form-control"

                value="{{ $data->TravelInfo->travel_ftf_start_date }}"
                required
                name="travel_ftf_start_date" />
              <label>FTF-Start-Date</label>
            </div>
          </div>

          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="date"
                class="form-control"
                required
                value="{{ $data->TravelInfo->travel_ftf_end_date }}"
                name="travel_ftf_end_date" />
              <label>FTF-end-Date</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                required
                value="{{ $data->TravelInfo->depart_airport }}"
                name="travel_darpart_airport" />
              <label>depart-airport</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                required
                value="{{ $data->TravelInfo->arrive_airport }}"
                name="travel_arrive_airport" />
              <label>Arrive-airport</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                required
                value="{{ $data->TravelInfo->airline }}"
                name="travel_airline" />
              <label>airline</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="time"
                class="form-control"
                required
                value="{{ $data->TravelInfo->depart_time }}"
                name="travel_depart_time" />
              <label>Depart-Time</label>
            </div>
          </div>

          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="date"
                class="form-control"
                value="{{ $data->TravelInfo->depart_facility }}"
                required
                name="travel_depart_facility" />
              <label>Depart-Facility</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="time"
                class="form-control"
                required
                value="{{ $data->TravelInfo->arrive_time }}"
                name="travel_arrive_time" />
              <label>Arrive-Time</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="date"
                class="form-control"
                required
                value="{{ $data->TravelInfo->arrive_date }}"
                name="travel_arrive_date" />
              <label>Arrive-date</label>
            </div>
          </div>
        </div>
      </div>

      <!-- Client document status -->

      <div class="part my-3">
        <div class="form-heading">
          <h3>*Client Document Status</h3>
        </div>
        <div class="row my-3 py-3 mx-2">
          <div class="col-md-4  col-sm-6 col-xs-12">
            <input
              class="form-check-input"
              type="checkbox"
              name="doc_fitness"
              value="true"
              id="doc1" />
            <label class="form-check-label" for="doc1">
              Fitness for Flying
            </label>
          </div>
          <div class="col-md-4  col-sm-6 col-xs-12">
            <input
              class="form-check-input"
              type="checkbox"
              value="true"
              name="doc_medfit"
              id="doc2" />
            <label class="form-check-label" for="doc2">
              Medfit
            </label>
          </div>
          <div class="col-md-4  col-sm-6 col-xs-12">
            <input
              class="form-check-input"
              type="checkbox"
              value="true"
              name="doc_dcOrders"
              id="doc3" />
            <label class="form-check-label" for="doc3">
              DC Orders
            </label>
          </div>
          <div class="col-md-4  col-sm-6 col-xs-12">
            <input
              class="form-check-input"
              type="checkbox"
              value="true"
              name="doc_constent"
              id="doc4" />
            <label class="form-check-label" for="doc4">
              Consent/HIPAA
            </label>
          </div>
    
          <div class="col-md-4  col-sm-6 col-xs-12">
            <input
              class="form-check-input"
              type="checkbox"
              value="true"
              name="doc_identification"
              id="doc5" />
            <label class="form-check-label" for="doc5">
              Identification
            </label>
          </div>
       
    
      
          <div class="col-md-12 col-sm-12">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                required
                value="{{ $data->ClientDocumentStatus->other }}"
                name="doc_other" />
              <label>Other</label>
            </div>
          </div>
        </div>
      </div>

      <!-- Client Nurse to Nurse Medical Report -->

      <div class="part my-3">
        <div class="form-heading">
          <h3>*Client Nurse to Nurse Medical Report</h3>
        </div>
        <div class="row my-3 py-3 mx-2">
          <div class="col-md-6 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                name="cl_nurse_rname"
                value="{{ $data->ClientNurseToNurse->rn_name }}"
                required />
              <label>RN-Name</label>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                value="{{ $data->ClientNurseToNurse->date_time }}"
                name="cl_nurse_date_time"
                required />
              <label>Date/Time</label>
            </div>
          </div>
          <div class="col-md-2 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                value="{{ $data->ClientNurseToNurse->temp }}"
                required
                name="cl_nurse_temp" />
              <label>Temp</label>
            </div>
          </div>
          <div class="col-md-2 col-sm-6">
            <div class="form-group">
              <p>HR</p>
              <input
                type="number"
                min="0"
                max="100"
                step="0.1"
                value="{{ $data->ClientNurseToNurse->hr }}"
                class="form-control"
                required
                name="cl_nurse_hr" />
              <!-- <label>hr</label> -->
            </div>
          </div>
          <div class="col-md-2 col-sm-6">
            <div class="form-group">
              <p>B/P</p>
              <input
                type="number"
                min="0"
                max="100"
                step="0.1"
                value="{{ $data->ClientNurseToNurse->bp }}"
                class="form-control"
                required
                name="cl_nurse_bp" />
              <!-- <label>b/p</label> -->
            </div>
          </div>
          <div class="col-md-2 col-sm-6">
            <div class="form-group">
              <p>RR</p>
              <input
                type="number"
                min="0"
                max="100"
                value="{{ $data->ClientNurseToNurse->rr }}"
                step="0.1"
                class="form-control"
                required
                name="cl_nurse_rr" />
              <!-- <label>rr</label> -->
            </div>
          </div>
          <div class="col-md-2 col-sm-6">
            <div class="form-group">
              <p>FiO <sub>2</sub></p>
              <input
                type="number"
                min="0"
                max="100"
                value="{{ $data->ClientNurseToNurse->fio2 }}"
                step="0.1"
                class="form-control"
                required
                name="cl_nurse_fio" />
              <!-- <label>fio2</label> -->
            </div>
          </div>
          <div class="col-md-2 col-sm-6">
            <div class="form-group">
              <p>SpO <sub>2</sub></p>
              <input
                type="number"
                min="0"
                max="100"
                step="0.1"
                class="form-control"
                value="{{ $data->ClientNurseToNurse->spo2 }}"
                required
                name="cl_nurse_spo" />
            </div>
          </div>

          <div class="col-md-12 col-sm-12">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                name="cl_nurse_allergies"
                value="{{ $data->ClientNurseToNurse->allergies }}"
                required />
              <label>Allergies</label>
            </div>
          </div>
          <div class="col-md-12 col-sm-12">
            <div class="form-group">
              <textarea
                name="cl_nurse_nuero"
                class="form-control"
                rows="5"
                required>{{ $data->ClientNurseToNurse->nuero }}</textarea>

              <label>Nuero</label>
            </div>
          </div>
          <div class="col-md-12 col-sm-12">
            <div class="form-group">
              <textarea
                name="cl_nurse_cv"
                class="form-control"
                rows="5"

                required>{{ $data->ClientNurseToNurse->cv }}</textarea>

              <label>CV</label>
            </div>
          </div>
          <div class="col-md-12 col-sm-12">
            <div class="form-group">
              <textarea
                name="cl_nurse_pulm"
                class="form-control"
                rows="5"
                required>{{ $data->ClientNurseToNurse->pulm }}</textarea>

              <label>pulm</label>
            </div>
          </div>
          <div class="col-md-12 col-sm-12">
            <div class="form-group">
              <textarea
                name="cl_nurse_gl"
                class="form-control"
                rows="5"
                required>{{ $data->ClientNurseToNurse->gl }}</textarea>

              <label>gl</label>
            </div>
          </div>
          <div class="col-md-12 col-sm-12">
            <div class="form-group">
              <textarea
                name="cl_nurse_gu"
                class="form-control"
                rows="5"
                required>{{ $data->ClientNurseToNurse->gu }}</textarea>

              <label>gu</label>
            </div>
          </div>
          <div class="col-md-12 col-sm-12">
            <div class="form-group">
              <textarea
                name="cl_nurse_skin"
                class="form-control"
                rows="5"
                required>{{ $data->ClientNurseToNurse->skin }}</textarea>

              <label>skin</label>
            </div>
          </div>
          <div class="col-md-12 col-sm-12">
            <div class="form-group">
              <textarea
                name="cl_nurse_analgesia"
                class="form-control"
                rows="5"
                required>{{ $data->ClientNurseToNurse->analgesia }}</textarea>

              <label>analgesia</label>
            </div>
          </div>
          <div class="col-md-12 col-sm-12">
            <div class="form-group">
              <textarea
                name="cl_nurse_sedation"
                class="form-control"
                rows="5"
                required>{{ $data->ClientNurseToNurse->sedation }}</textarea>

              <label>sedation</label>
            </div>
          </div>
          <div class="col-md-12 col-sm-12">
            <div class="form-group">
              <textarea
                name="cl_nurse_IV"
                class="form-control"
                rows="5"
                required>{{ $data->ClientNurseToNurse->iv }}</textarea>

              <label>IV</label>
            </div>
          </div>
          <div class="col-md-12 col-sm-12">
            <div class="form-group">
              <textarea
                name="cl_nurse_notes"
                class="form-control"
                rows="5"
                required>{{ $data->ClientNurseToNurse->notes }}</textarea>

              <label>notes</label>
            </div>
          </div>
        </div>
      </div>

      <!--Flight Details -->

      <div class="part my-3">
        <div class="form-heading">
          <h3>*Flight Details</h3>
        </div>
        <div class="row my-3 py-3 mx-2">
          <div class="col-md-12 col-sm-12">
            <div class="form-group">
              <textarea
                name="fi_detail_rnOut"
                class="form-control"
                rows="5"
                required>{{ $data->FlightDetail->rn_outbound }}</textarea>

              <label>RN-Outbound</label>
            </div>
          </div>
          <div class="col-md-12 col-sm-12">
            <div class="form-group">
              <textarea
                name="fi_detail_client"
                class="form-control"
                rows="5"
                required>{{ $data->FlightDetail->client_rn }}</textarea>

              <label>Client-and-RN</label>
            </div>
          </div>
          <div class="col-md-12 col-sm-12">
            <div class="form-group">
              <textarea
                name="fi_detail_rnReturn"
                class="form-control"
                rows="5"
                required>{{ $data->FlightDetail->rn_return }}</textarea>

              <label>RN-Return</label>
            </div>
          </div>
          <div class="col-md-12 col-sm-12">
            <div class="form-group">
              <textarea
                name="fi_detail_notes"
                class="form-control"
                rows="5"
                required>{{ $data->FlightDetail->notes }}</textarea>

              <label>Notes</label>
            </div>
          </div>
        </div>
      </div>
      <!--Ground Details -->

      <div class="part my-3">
        <div class="form-heading">
          <h3>*Ground Details</h3>
        </div>
        <p class="m-4">
          RN Ground <br />
          Please use Uber/Lyft/Taxi/Airport shuttle as needed
        </p>
        <div class="row my-3 py-3 mx-2">
          <div class="col-md-12 col-sm-12">
            <div class="form-group">
              <textarea
                name="gr_detail_departure"
                class="form-control"
                rows="5"
                required>{{ $data->GroundDetail->departure }}</textarea>

              <label>Departure</label>
            </div>
          </div>
          <div class="col-md-12 col-sm-12">
            <div class="form-group">
              <textarea
                name="gr_detail_arrival"
                class="form-control"
                rows="5"
                required>{{ $data->GroundDetail->arrival }}</textarea>

              <label>Arrival</label>
            </div>
          </div>
          <div class="col-md-12 col-sm-12">
            <div class="form-group">
              <textarea
                name="gr_detail_notes"
                class="form-control"
                rows="5"
                required>{{ $data->GroundDetail->notes }}</textarea>

              <label>Notes</label>
            </div>
          </div>
        </div>
      </div>

      <!-- map screenshot -->

      <div class="part my-3">
        <div class="form-heading">
          <h3>*Map Screenshot</h3>
          <div class="row">

            <div class="col-12">
  
              <img src="https://drive.google.com/uc?export=download&id=1IF6zaVtfGu6tTGpyYCzRnpsm3ymPKNFc" width="100%" alt="world map">
            </div>
          </div>
        </div>
      </div>

      <!-- Loading Detail -->

      <div class="part my-3">
        <div class="form-heading">
          <h3>*Loading Detail</h3>
        </div>

        <div class="row my-3 py-3 mx-2">
          <div class="col-md-12 col-sm-12">
            <div class="form-group">
              <textarea
                name="loading_detail_loading1"
                class="form-control"
                rows="5"
                required>{{ $data->LoadingDetail->loading_1 }}</textarea>

              <label>loading1</label>
            </div>
          </div>
          <div class="col-md-12 col-sm-12">
            <div class="form-group">
              <textarea
                name="loading_detail_loading2"
                class="form-control"
                rows="5"
                required>{{ $data->LoadingDetail->loading_1 }}</textarea>

              <label>loading2</label>
            </div>
          </div>
          <div class="col-md-12 col-sm-12">
            <div class="form-group">
              <textarea
                name="loading_detail_loading3"
                class="form-control"
                rows="5"
                required>{{ $data->LoadingDetail->loading_3 }}</textarea>

              <label>loading3</label>
            </div>
          </div>
        </div>
      </div>

      <!-- Travel instructions -->

      <div class="part my-3">
        <div class="form-heading">
          <h3>*Travel instructions</h3>
        </div>

        <div class="row my-3 py-3 mx-2">
          <div class="col-md-12 col-sm-12">
            <div class="form-group">
              <textarea
                name="travel_instruction_general"
                class="form-control"
                rows="5"
                required>{{ $data->TravelInstruction->general }}</textarea>

              <label>general</label>
            </div>
          </div>
          <div class="col-md-12 col-sm-12">
            <div class="form-group">
              <textarea
                name="travel_instruction_loading2"
                class="form-control"
                rows="5"
                required>{{ $data->TravelInstruction->loading_2 }}</textarea>

              <label>loading2</label>
            </div>
          </div>
          <div class="col-md-12 col-sm-12">
            <div class="form-group">
              <textarea
                name="travel_instruction_loading3"
                class="form-control"
                rows="5"
                required>{{ $data->TravelInstruction->loading_3 }}</textarea>

              <label>loading3</label>
            </div>
          </div>
        </div>
      </div>

      <!-- FLYING ANGELS CONFIDENTIAL MEDICAL TRAVEL PACKET -->

      <div class="part my-3">
        <div class="form-heading">
          <h3>*FLYING ANGELS CONFIDENTIAL MEDICAL TRAVEL PACKET</h3>
        </div>
        <div class="row my-3 py-3 mx-2">
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                name="flying_to"
                value="{{ $data->FlyingAngels->to }}"
                required />
              <label>to</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="tel"
                class="form-control"
                value="{{ $data->FlyingAngels->from }}"
                name="flying_from"
                required />
              <label>From</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                required
                value="{{ $data->FlyingAngels->fax }}"
                name="flying_fax" />
              <label>Fax</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                required
                value="{{ $data->FlyingAngels->pages }}"
                name="flying_pages" />
              <label>Pages(including this page)</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                required
                value="{{ $data->FlyingAngels->phone }}"
                name="flying_phone" />
              <label>phone</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="date"
                class="form-control"
                required
                value="{{ $data->FlyingAngels->date }}"
                name="flying_date" />
              <label>date</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                required
                value="{{ $data->FlyingAngels->re }}"
                name="flying_re" />
              <label>re</label>
            </div>
          </div>

          <hr />

          <section class="mt-4 p-4 rounded">
            <div class="row my-3">
              <div class="col-md-6 col-sm-8">
                <div class="form-group d-flex">
                  <p class="d-block">Dear</p>
                  <input
                    type="text"
                    class="form-control"
                    required
                    value="{{ $data->FlyingAngels->dear_name }}"
                    name="flying_dear_name" />
                </div>
              </div>
            </div>
            <div class="row my-3">
              <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <p>
                  This coversheet will act as a check-sheet for you and your
                  staff to complete all necessary activities.
                </p>
              </div>
              <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value="true"
                  
                  name="flying_check1"
                  id="1" />
                <label class="form-check-label" for="1">
                  Face Sheet, History & Physical, and list of current
                  medications faxed to RN MEDFLIGHTS, LLC
                </label>
              </div>
              <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value="true"
                  name="flying_check2"
                  id="2" />
                <label class="form-check-label" for="2">
                  “COMMERCIAL AIRLINE MEDICAL ORDERS” reviewed, signed, faxed,
                  original with PT d/c chart
                </label>
              </div>
              <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value="true"
                  name="flying_check3"
                  id="3" />
                <label class="form-check-label" for="3">
                  “FITNESS TO FLY” reviewed, signed, faxed, original with PT
                  d/c chart
                </label>
              </div>
              <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value="true"
                  name="flying_check4"
                  id="4" />
                <label class="form-check-label" for="4">
                  “CONSENT FORM & HIPAA NOTICE” reviewed, signed, faxed,
                  original with PT d/c chart
                </label>
              </div>
              <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value="true"
                  name="flying_check5"
                  id="5" />
                <label class="form-check-label" for="5">
                  Photo ID location verified (Passport/visa for international
                  travel)
                </label>
              </div>
              <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value="true"
                  name="flying_check6"
                  id="6" />
                <label class="form-check-label" for="6">
                  Appropriate travel clothing/attire available (sweat suit or
                  other loose-fitting clothing)
                </label>
              </div>

              <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value="true"
                  name="flying_check7"
                  id="7" />
                  <label for="7">Other</label>
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    name="fyling_other"
                    value="{{ $data->FlyingAngels->other }}"
                    required />
                  <label >other</label>

                </div>
              </div>
              <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value="true"
                  name="flying_check8"
                  id="8" />
                <label class="form-check-label" for="8">
                  Please fax all requested forms to 210-245-7624
                </label>
              </div>
              <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <p>
                  Please contact me immediately should you have any questions
                  regarding the above requests at 210-901-5226.
                </p>
              </div>
              <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="col-md-12 col-sm-12">
                  <div class="form-group">
                    <textarea
                      name="flying_comment"
                      class="form-control"
                     
                      rows="5"
                      required> {{ $data->FlyingAngels->comment }}</textarea>

                    <label>Comment</label>
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <p>Regards,</p>
                <br />
                <p>Marc T. Brinsley</p>
                <p>CEO/Chief Flight Nurse</p>
                <p>Main Number: 210-901-5226</p>
                <p>Toll-Free <strong>1-877-354-7049</strong></p>
              </div>
            </div>
          </section>
        </div>
      </div>

      <!-- COMMERCIAL AIRLINE MEDICAL ORDERS -->

      <div class="part my-3">
        <div class="form-heading">
          <h3>*COMMERCIAL AIRLINE MEDICAL ORDERS</h3>
        </div>
        <div class="row my-3 py-3 mx-2">
          <div class="col-12">
            <p>
              These are to facilitate the transport of and to supplement
              regular discharge orders.
            </p>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                value="{{ $data->CommercialAirline->passenger_name }}"
                name="commercial_passenger_name"
                required />
              <label>passenger-name</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                value="{{ $data->CommercialAirline->discharging_md }}"
                name="commercial_discharging_md"
                required />
              <label>discharging-md</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                value="{{ $data->CommercialAirline->discharging_facility }}"
                name="commercial_discharging_facility"
                required />
              <label>discharging-facility</label>
            </div>
          </div>

          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                value="{{ $data->CommercialAirline->rehab_unit }}"
                name="commercial_rehab_unit"
                required />
              <label>rehab-unit</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                value="{{ $data->CommercialAirline->unit_phone }}"
                name="commercial_unit_phone"
                required />
              <label>unit-phone</label>
            </div>
          </div>
        </div>
      </div>
      <!-- FLYING ANGELS DOES NOT CARRY STOCK MEDICATIONS ON COMMERCIAL AIRLINES MEDICATIONS MUST BE DISPENSED FROM SENDING FACILITY WITH TRANSFER -->

      <div class="part my-3">
        <div class="form-heading">
          <h3>
            *FLYING ANGELS DOES NOT CARRY STOCK MEDICATIONS ON COMMERCIAL
            AIRLINES MEDICATIONS MUST BE DISPENSED FROM SENDING FACILITY WITH
            TRANSFER
          </h3>
        </div>
        <div class="row my-3 py-3 mx-4">
          <div class="col-12">
            <p
              class="text-center"
              style="
                text-transform: uppercase;
                font-size: 18px;
                font-weight: bold;
              ">
              PRE-Flight order
            </p>
          </div>
          <div class="col-md-12 col-sm-12">
            <input
              class="form-check-input"
              type="checkbox"
              value="true"
              name="pre_flight_check1"
              id="pre1" />
            <label class="form-check-label" for="pre1">
              Diet: Hold Tube Feedings 8 hours preflight.
            </label>
          </div>
          <div class="col-md-12 col-sm-12">
            <input
              class="form-check-input"
              type="checkbox"
              value="true"
              name="pre_flight_check2"
              id="pre2" />
            <label class="form-check-label" for="pre2">
              DVT prophylaxis (if condition warrants)
            </label>
          </div>
          <div class="col-md-12 col-sm-12">
            <input
              class="form-check-input"
              type="checkbox"
              value="true"
              name="pre_flight_check3"
              id="pre3" />
            <label class="form-check-label" for="pre3">
              Bowel prep: if no BM 24 hrs pre-flight
            </label>
          </div>
          <div class="col-md-12 col-sm-12">
            <input
              class="form-check-input"
              type="checkbox"
              value="true"
              name="pre_flight_check4"
              id="pre4" />
            <label class="form-check-label" for="pre4">
              Other
            </label>
          </div>
          <br />
          <br /><br />
          <div class="col-12">
            <p
              class="text-center"
              style="
                text-transform: uppercase;
                font-size: 18px;
                font-weight: bold;
              ">
              IN-Flight order
            </p>
          </div>
          <div class="col-md-12 col-sm-12">
            <input
              class="form-check-input"
              type="checkbox"
              value="true"
              name="in_flight_check1"
              id="in1" />
            <label class="form-check-label" for="in1">
              Oxygen: Supplemental oxygen @ None . Maintain O2 Saturation >
              N/A
            </label>
          </div>
          <div class="col-md-12 col-sm-12">
            <input
              class="form-check-input"
              type="checkbox"
              value="true"
              name="in_flight_check2"
              id="in2" />
            <label class="form-check-label" for="in2">
              Foley Catheter (no condom catheters)
            </label>
          </div>
          <div class="col-md-12 col-sm-12">
          
              <input
              class="form-check-input"
              type="checkbox"
              value="true"
              name="in_flight_check3" id="iv"/>
              <label class="form-check-label" for="iv">
                IV Fluids
              </label>
              
              <div class="form-group">
                <input
                type="text"
                class="form-control"
                name="in_flight_IV"
                value="{{ $data->FlyingRule->iv_fluids }}"
                required />
                <label > IV Fluids </label>

              </div>
             
          </div>
          <div class="col-md-6 col-sm-6">
            <input
              class="form-check-input"
              type="checkbox"
              value="true"
              id="in_flight_check_solution"
              name="in_flight_check_solution" />
              <label for="in_flight_check_solution"> solution </label>

              <div class="form-group">

                <input
                  type="text"
                  class="form-control"
                  name="in_flight_solution"
                  value="{{ $data->FlyingRule->solution }}"
                  required />
                  <label > solution </label>
              </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <input
              class="form-check-input"
              type="checkbox"
              value="true"
              id="in_flight_check_rate"
              name="in_flight_check_rate" />
              <label for="in_flight_check_rate"> Rate-ml/hr </label>

            <div class="form-group">
              <input
                type="text"
                class="form-control"
                name="in_flight_rate"
                value="{{ $data->FlyingRule->rate_ml }}"
                required />
              <label> rate-ml/hr</label>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <input
              class="form-check-input"
              type="checkbox"
              value="true"
              id="in_flight_check_other"
              name="in_flight_check_other" />

            <label for="in_flight_check_other"> other</label>
          </div>
          <div class="col-md-12 col-sm-12">
            <input
              class="form-check-input"
              type="checkbox"
              value="true"
              name="in_flight_check_mediHour" id="in_flight_check_mediHour"/>

            <label for="in_flight_check_mediHour">
              MEDICATIONS MUST BE DISPENSED FROM FACILITY WITH PT TRANSFER.
              PLEASE ENSURE SUFFICIENT MEDICATIONS ARE DISPENSED FOR</label
            >
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                name="in_flight_hour"
                value="{{ $data->FlyingRule->in_hour }}"
                required />
              <label for="">hour</label>
            </div>
          </div>

          <div class="col-md-12 col-sm-12">
            <input
              class="form-check-input"
              type="checkbox"
              value="true"
              id="in_flight_check_sedation"
              name="in_flight_check_sedation" />

            <label for="in_flight_check_sedation">
              Sedation (list route, dosage, frequency) As Per D/C
              Orders</label
            >
          </div>
          <div class="col-md-12 col-sm-12">
            <input
              class="form-check-input"
              type="checkbox"
              value="true"
              name="in_flight_check_analgesia" id="in_flight_check_analgesia" />

            <label for="in_flight_check_analgesia">
              Analgesia (list route, dosage, frequency) As Per D/C Orders
              Routine medications (list route, dosage, frequency) As Per D/C
              Orders
            </label>
          </div>
          <div class="col-md-8 col-sm-6"></div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                value="{{ $data->FlyingRule->in_provider }}"
                name="in_flight_provider"
                required />
              <label>Provider</label>
            </div>
          </div>
          <div class="col-md-8 col-sm-6"></div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                value="{{ $data->FlyingRule->in_signature }}"
                name="in_flight_signature"
                required />
              <label>signature</label>
            </div>
          </div>
          <div class="col-md-8 col-sm-6"></div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="date"
                class="form-control"
                value="{{ $data->FlyingRule->in_date }}"
                name="in_flight_date"
                required />
              <label>date</label>
            </div>
          </div>

          {{-- --------------------- --}}
          <br />
          <br /><br />
          <div class="col-12">
            <p
              class="text-center"
              style="
                text-transform: uppercase;
                font-size: 18px;
                font-weight: bold;
              ">
              PHYSICIANS STATEMENT OF FITNESS TO FLY ON COMMERCIAL AIRCRAFT
            </p>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                name="physicians_passenger_name"
                value="{{ $data->PhysicanStatement->passenger_name }}"
                required />
              <label>Passenger-Name</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="date"
                class="form-control"
                value="{{ $data->PhysicanStatement->date_of_travel }}"
                name="physicians_date_of_travel"
                required />
              <label>date-of-travel</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                value="{{ $data->PhysicanStatement->from }}"
                name="physicians_from"
                required />
              <label>from</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                value="{{ $data->PhysicanStatement->to }}"
                name="physicians_to"
                required />
              <label>to</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                value="{{ $data->PhysicanStatement->airline }}"
                name="physicians_airline"
                required />
              <label>airline(s)</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                value="{{ $data->PhysicanStatement->flight }}"
                class="form-control"
                name="physicians_flight"
                required />
              <label>flight(s)</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="time"
                class="form-control"
                value="{{ $data->PhysicanStatement->departure_time }}"
                name="physicians_departure_time"
                required />
              <label>departure-time(s)</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="time"
                class="form-control"
                value="{{ $data->PhysicanStatement->arival_time }}"
                name="physicians_arrival_time"
                required />
              <label>arrival-time(s)</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="time"
                class="form-control"
                value="{{ $data->PhysicanStatement->discharging_facility }}"
                name="physicians_descharging_facility"
                required />
              <label>Discharging-Facility</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="time"
                class="form-control"
                value="{{ $data->PhysicanStatement->discharging_md }}"
                name="physicians_descharging_Md"
                required />
              <label>Discharging-MD</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                value="{{ $data->PhysicanStatement->facility_address }}"
                name="physicians_facility_address"
                required />
              <label>Facility-Address</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                value="{{ $data->PhysicanStatement->phone_number }}"
                name="physicians_phone_number"
                required />
              <label>phone_number</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="date"
                class="form-control"
                value="{{ $data->PhysicanStatement->addmision_date }}"
                name="physicians_admission_date"
                required />
              <label>admission-date</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                value="{{ $data->PhysicanStatement->diagnosis }}"
                name="physicians_diagonsis"
                required />
              <label>diagnosis</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input
                type="date"
                class="form-control"
                value="{{ $data->PhysicanStatement->ftf_from_date }}"
                name="physicians_ftf_date"
                required />
              <label>ftf-from-date</label>
            </div>
          </div>
          <br />
          <hr />

          <div class="col-md-6 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                value="{{ $data->PhysicanStatement->class_of_service }}"
                name="physicians_class_service"
                required />
              <label>class-of-service</label>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                value="{{ $data->PhysicanStatement->economy }}"
                name="physicians_economy"
                required />
              <label>Economy-Acceptable-if-necessary</label>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                value="{{ $data->PhysicanStatement->passenger }}"
                name="physicians_passenger_able"
                required />
              <label>Passenger-able-to-sit-up-for takeoff/landing</label>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                value="{{ $data->PhysicanStatement->oxygen_required }}"
                name="physicians_oxygen_required"
                required />
              <label>Oxygen-Required</label>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control" value="{{ $data->PhysicanStatement->oxygen_needed }}"
                name="physicians_oxygen_needed"
                required />
              <label>Oxygen-Needed-During</label>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                value="{{ $data->PhysicanStatement->sop2_target }}"
                name="physicians_spo2_target"
                required />
              <label>sop2-target</label>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                value="{{ $data->PhysicanStatement->attendant }}"
                name="physicians_attendant_needed"
                required />
              <label>Attendant-Needed</label>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                value="{{ $data->PhysicanStatement->special_service }}"
                name="physicians_service_request"
                required />
              <label>special-service-request</label>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                value="{{ $data->PhysicanStatement->forseen }}"
                name="physicians_foreseen_risk"
                required />
              <label>Foreseen-risk-to-other-passangers?</label>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                value="{{ $data->PhysicanStatement->contagious }}"
                name="physicians_contagious"
                required />
              <label>Contagious/communicable-disease?</label>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                value="{{ $data->PhysicanStatement->prognosis }}"
                name="physicians_prognosis_trip"
                required />
              <label>Prognosis-for-trip</label>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                value="{{ $data->PhysicanStatement->facility }}"
                name="physicians_facility"
                required />
              <label>Facility</label>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                value="{{ $data->PhysicanStatement->address }}"
                name="physicians_address"
                required />
              <label>Address</label>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                value="{{ $data->PhysicanStatement->physician_name }}"
                name="physicians_physician_name"
                required />
              <label>Physician-Name</label>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                value="{{ $data->PhysicanStatement->signature }}"
                name="physicians_signature"
                required />
              <label>Signature</label>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                value="{{ $data->PhysicanStatement->date }}"
                name="physicians_date"
                required />
              <label>date</label>
            </div>
          </div>
        </div>
      </div>

      <!-- MEDICAL TREATMENT AND CONSENT FORM & HIPAA NOTICE-->

      <div class="part my-3">
        <div class="form-heading">
          <h3>*MEDICAL TREATMENT AND CONSENT FORM & HIPAA NOTICE</h3>
        </div>
        <div class="row my-3 py-3 mx-2">
          <div class="col-12">
            I, <input type="text" name="medical_treatment_name"   value="{{ $data->MedicalTreatment->name }}" id="" /> or if
            Client is incapacitated or is a minor,
            <input type="text" name="medical_treatment_name2" value="{{ $data->MedicalTreatment->text2 }}" id="" /> ,
            acting as Guardian of Client, hereby authorize RN MEDFLIGHTS to
            provide assistance, coordination of travel plans, and provide
            medical treatment during ground and/or air transport from
            <input
              type="text" value="{{ $data->MedicalTreatment->from }}"
              name="medical_treatment_air_transport_from"
              id="" />
            to
            <input
              type="text" value="{{ $data->MedicalTreatment->to }}"
              name="medical_treatment_air_transport_to"
              id="" />
          </div>
          <br />
          <hr />
          <br />

          <div class="col-12">
            <ul>
              <li>
                Client/Guardian acknowledges and assumes all risks inherent
                with the transportation and medical treatment provided by RN
                MEDFLIGHTS. The client hereby agrees to release and hold
                harmless RN MEDFLIGHTS , as well as all independent
                contractors, medical personnel and sub-contractors with
                respect to any and all claims for damage or injury to persons
                or property by the client while boarding, exiting, riding from
                all aircraft or vehicles used during the course of
                transportation from
                <input value="{{ $data->MedicalTreatment->from1 }}"
                  type="text"
                  name="medical_treatment_client_guardian_from"
                  id="" />
                to
                <input value="{{ $data->MedicalTreatment->to1 }}"
                  type="text"
                  name="medical_treatment_client_guardian_to"
                  id="" />
              </li>
              <li>
                Client/Guardian consents to the provision of all medical
                treatment that, in the judgment of the attending medical
                personnel, may become necessary or advisable during
                transportation.
              </li>
              <li>
                Client/Guardian have been informed of and understand the
                nature of the risks involved in the transportation and
                understand that risks may be involved in the provision of any
                medical care that might become necessary or advisable during
                transportation.
              </li>
              <li>
                Client/Guardian is aware that the practice of medicine is not
                an exact science and I acknowledge that no guarantees have
                been made to me as to the results of said medical care.
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- HIPAA-->

      <div class="part my-3">
        <div class="form-heading">
          <h3>*HIPAA</h3>
        </div>
        <div class="row my-3 py-3 mx-2">
          <div class="col-12">
            Pursuant to the Health Insurance Portability and Accountability
            Act of 1996 (HIPAA), public law 104-191, Client/Guardian
            authorizes any physician, hospital, or other health care entity to
            release any medical or other information necessary to RN
            MEDFLIGHTS . <br />
            <br />

            Client/Guardian certifies that this form has been fully explained,
            and that Client/Guardian understand its contents. Client/Guardian
            has had the opportunity to ask questions about the transport, this
            form, and have had them answered to their satisfaction.
          </div>

          <div class="col-md-4 col-sm-4">
            <div class="form-group">
              <label for="">Client</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="form-group">
              <input
                type="text" value="{{ $data->MedicalTreatment->client_signature }}"
                class="form-control"
                name="hipaa_client_signature"
                required />
              <label>signature </label>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="form-group">
              <input
                type="date" value="{{ $data->MedicalTreatment->client_date }}"
                class="form-control"
                name="hipaa_client_date"
                required />
              <label>date </label>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="form-group">
              <label for="">Guardian</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                value="{{ $data->MedicalTreatment->guardian_signature }}"
                name="hipaa_guardian_signature"
                required />
              <label>signature </label>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="form-group">
              <input
                type="date"
                class="form-control"
                value="{{ $data->MedicalTreatment->guardian_date }}"
                name="hipaa_guardian_date"
                required />
              <label>date </label>
            </div>
          </div>
        </div>
      </div>

      <!-- submit print -->
      <div class="row my-3 py-3 mx-2">
        <div class="col-md-9 col-sm-9"></div>
        <div class="col-md-3 col-sm-3">
          <input
            type="submit"
            class="form-control btn btn-primary"
            value="Save"
            required />
        </div>
      </div>
    </form>
  
</div>




<script>
    const labels = document.querySelectorAll(".form-group label");

    labels.forEach((label) => {
      label.innerHTML = label.innerText
        .split("")
        .map(
          (letter, idx) =>
            `<span style="transition-delay:${idx * 50}ms">${letter}</span>`
        )
        .join("");
    });
  </script>



{{-- date set auto matic --}}

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  // Function to calculate and set the age
  function calculateAge() {
    const dobInput = $('#dob');
    const ageInput = $('#age');

    const selectedDate = new Date(dobInput.val());
    const currentDate = new Date();

    const age = currentDate.getFullYear() - selectedDate.getFullYear();

    if (
      currentDate.getMonth() < selectedDate.getMonth() ||
      (currentDate.getMonth() === selectedDate.getMonth() &&
        currentDate.getDate() < selectedDate.getDate())
    ) {
      age--;
    }

    ageInput.val(age);
  }

  // Add an event listener using jQuery
  $(document).ready(function() {
    $('#dob').change(calculateAge);
  });
</script>
@endsection 

