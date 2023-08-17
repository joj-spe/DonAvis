@extends('layout.template')
@section('title', "Profil utilisateur")

@section('contenu')
<div class="card card-body" id="profile">
  <div class="row justify-content-center align-items-center">
    <div class="col-sm-auto col-4">
      <div class="avatar avatar-xl position-relative">
        <img src="../../../assets/img/bruce-mars.jpg" alt="bruce" class="w-100 border-radius-lg shadow-sm">
      </div>
    </div>
    <div class="col-sm-auto col-8 my-auto">
      <div class="h-100">
        <h5 class="mb-1 font-weight-bolder">Alec Thompson</h5>
        <p class="mb-0 font-weight-bold text-sm">CEO / Co-Founder</p>
      </div>
    </div>
    <div class="col-sm-auto ms-sm-auto mt-sm-0 mt-3 d-flex">
      <label class="form-check-label mb-0">
        <small id="profileVisibility">Switch to invisible</small>
      </label>
      <div class="form-check form-switch ms-2">
        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault23" checked onchange="visible()">
      </div>
    </div>
  </div>
</div>
<div class="card mt-4" id="basic-info">
  <div class="card-header">
    <h5>Basic Info</h5>
  </div>
  <div class="card-body pt-0">
    <div class="row">
      <div class="col-6">
        <label class="form-label">First Name</label>
        <div class="input-group">
          <input id="firstName" name="firstName" class="form-control" type="text" placeholder="Alec" required="required">
        </div>
      </div>
      <div class="col-6">
        <label class="form-label">Last Name</label>
        <div class="input-group">
          <input id="lastName" name="lastName" class="form-control" type="text" placeholder="Thompson" required="required">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4 col-6">
        <label class="form-label mt-4">I'm</label>
        <select class="form-control" name="choices-gender" id="choices-gender">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
      </div>
      <div class="col-sm-8">
        <div class="row">
          <div class="col-sm-5 col-5">
            <label class="form-label mt-4">Birth Date</label>
            <select class="form-control" name="choices-month" id="choices-month">
            </select>
          </div>
          <div class="col-sm-4 col-3">
            <label class="form-label mt-4">&nbsp;</label>
            <select class="form-control" name="choices-day" id="choices-day">
            </select>
          </div>
          <div class="col-sm-3 col-4">
            <label class="form-label mt-4">&nbsp;</label>
            <select class="form-control" name="choices-year" id="choices-year">
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-6">
        <label class="form-label mt-4">Email</label>
        <div class="input-group">
          <input id="email" name="email" class="form-control" type="email" placeholder="example@email.com">
        </div>
      </div>
      <div class="col-6">
        <label class="form-label mt-4">Confirmation Email</label>
        <div class="input-group">
          <input id="confirmation" name="confirmation" class="form-control" type="email" placeholder="example@email.com">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-6">
        <label class="form-label mt-4">Your location</label>
        <div class="input-group">
          <input id="location" name="location" class="form-control" type="text" placeholder="Sydney, A">
        </div>
      </div>
      <div class="col-6">
        <label class="form-label mt-4">Phone Number</label>
        <div class="input-group">
          <input id="phone" name="phone" class="form-control" type="number" placeholder="+40 735 631 620">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 align-self-center">
        <label class="form-label mt-4">Language</label>
        <select class="form-control" name="choices-language" id="choices-language">
          <option value="English">English</option>
          <option value="French">French</option>
          <option value="Spanish">Spanish</option>
        </select>
      </div>
      <div class="col-md-6">
        <label class="form-label mt-4">Skills</label>
        <input class="form-control" id="choices-skills" type="text" value="vuejs, angular, react" placeholder="Enter something" />
      </div>
    </div>
  </div>
</div>
@endsection
