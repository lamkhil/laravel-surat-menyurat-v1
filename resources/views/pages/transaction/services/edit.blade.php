@extends('layout.main')

@section('content')
<x-breadcrumb :values="[__('menu.transaction.menu'), __('menu.transaction.services_letter'), __('menu.general.edit')]">
</x-breadcrumb>

<div class="card mb-4">
    <form action="{{ route('transaction.services.update', $data) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-body row">
            <input type="hidden" name="type" value="services">
            <div class="col-sm-12 col-12 col-md-6 col-lg-4">
                <x-input-form name="reference_number" :value="$data->reference_number" :label="__('model.letter.reference_number')" />
            </div>
            <div class="col-sm-12 col-12 col-md-6 col-lg-4">
                <div class="mb-3">
                    <label for="classification_code" class="form-label">{{ __('model.letter.classification_code') }}</label>
                    <select class="form-select" id="classification_code" name="classification_code">
                        @foreach($classifications as $classification)
                        <option value="{{ $classification->code }}" @selected(old('classification_code')==$classification->code)>
                            {{ $classification->type }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-sm-12 col-12 col-md-6 col-lg-4">
                <div class="mb-3">
                    <label for="petugas" class="form-label">Petugas Pelayanan</label>
                    <select class="form-select" id="petugas" name="petugas">
                        @foreach($staff as $item)
                        <option value="{{ $item->id }}" @selected(old('petugas')==$item->id)>
                            {{ $item->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-sm-12 col-12 col-md-6 col-lg-6">
                <x-input-form name="letter_date" :value="date('Y-m-d', strtotime($data->letter_date))" :label="__('model.letter.letter_date')" type="date" />
            </div>
            <div class="col-sm-12 col-12 col-md-12 col-lg-12">
                <p>Yang bertanda tangan dibawah ini:</p>
            </div>
            <div class="col-sm-12 col-12 col-md-6 col-lg-4">
                <div class="mb-3">
                    <select class="form-select" id="sign" name="sign">
                        @foreach($admin as $item)
                        <option value="{{ $item->id }}" @selected(old('sign')==$item->id)>
                            {{ $item->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-sm-12 col-12 col-md-12 col-lg-12">
                <p>Dengan ini menerangkan bahwa:</p>
            </div>
            <div class="col-sm-12 col-12 col-md-6 col-lg-4">
                <x-input-form name="explain_name" :value="$data->explain_name" label="Nama*" />
            </div>
            <div class="col-sm-12 col-12 col-md-6 col-lg-4">
                <x-input-form name="explain_nik" :value="$data->explain_nik" label="NIK*" />
            </div>

            <div class="col-sm-12 col-12 col-md-6 col-lg-4">
                <x-input-form name="explain_phone" :value="$data->explain_phone ?? ''"  label="No Telp*"/>
            </div>
            <div class="col-sm-12 col-12 col-md-6 col-lg-4">
                <x-input-form name="explain_address" :value="$data->explain_address" label="Alamat*" />
            </div>
            <div class="col-sm-12 col-12 col-md-6 col-lg-4">
                <div class="mb-3">
                    <label for="explain_religion" class="form-label">Agama</label>
                    <select class="form-select" id="explain_religion" name="explain_religion">
                        @foreach($agama as $item)
                        <option value="{{ $item }}" @selected(old('explain_religion')==$item)>
                            {{ $item }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-sm-12 col-12 col-md-6 col-lg-4">
                <div class="mb-3">
                    <label for="explain_martial_status" class="form-label">Status Perkawinan</label>
                    <select class="form-select" id="explain_martial_status" name="explain_martial_status">
                        @foreach($pernikahan as $item)
                        <option value="{{ $item }}" @selected(old('explain_martial_status')==$item)>
                            {{ $item }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-sm-12 col-12 col-md-6 col-lg-4">
                <x-input-form name="explain_place_and_date_of_birth"  :value="$data->explain_place_and_date_of_birth ?? ''"  label="Tempat, Tanggal Lahir" />
            </div>
            <div class="col-sm-12 col-12 col-md-6 col-lg-4">
                <x-input-form name="explain_job" label="Pekerjaan" :value="$data->explain_job ?? ''"  />
            </div>
            <div class="col-sm-12 col-12 col-md-12 col-lg-12">
                <x-input-textarea-form name="description" label="Menerangkan Bahwa" :value="$data->description ?? ''"  />
            </div>

        </div>
        <div class="card-footer pt-0">
            <button class="btn btn-primary" type="submit">{{ __('menu.general.save') }}</button>
        </div>
    </form>
</div>
@endsection