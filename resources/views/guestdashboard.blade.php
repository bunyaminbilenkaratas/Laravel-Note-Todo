@extends('layouts.layout')
@section('title', 'Note Uygulaması')
@section('content')

                    <h3 class="mb-2">Your Notes</h3>
                    <div class="iq-tab-content">
                        <div class="d-flex flex-wrap align-items-top justify-content-between">
                            
                            <ul class="d-flex nav text-center mb-3">
                            <li><a href="/register"><button type="button" class="btn btn-outline-primary ml-2">New Note</button></a></li>
                            <li><a href="/register"><button type="button" class="btn btn-outline-primary ml-2">New To Do</button></a></li>
                               
                            </ul>   
                        </div>

                        <div class="note-content tab-content">                                
                            <div>
                                <div class="icon active animate__animated animate__fadeIn i-grid">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="card card-block card-stretch card-height card-bottom-border-info note-detail">
                                                <div class="card-header d-flex justify-content-between pb-1">
                                                    <div class="icon iq-icon-box-2 icon-border-info rounded">
                                                        <svg width="23" height="23" class="svg-icon" id="iq-main-01" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" style="stroke-dasharray: 83, 103; stroke-dashoffset: 0;"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="card-header-toolbar d-flex align-items-center">
                                                        <div class="dropdown">
                                                            <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton4" data-toggle="dropdown" aria-expanded="false" role="button">
                                                            <i class="fa-solid fa-trash-can"></i>
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="note-dropdownMenuButton4" style="">
                                                                <a href="#" class="dropdown-item new-note1" data-toggle="modal" data-target="#new-note1"><i class="las la-eye mr-3"></i>View</a>
                                                                <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                                <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="https://templates.iqonic.design/note-plus/laravel/public/#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body rounded">
                                                    <h4 class="card-title">Example Note</h4>
                                                    <p class="mb-3 card-description short">Please register to create a note</p>                                                            
                                                </div>
                                                <div class="card-footer">
                                                    <div class="d-flex align-items-center justify-content-end note-text note-text-info">
                                                        <a href="#" class=""><i class="fa-solid fa-lg fa-calendar-day mr-2"></i>@php $today = date('d/m/y'); echo $today; @endphp</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-4 col-md-6">
                                            <div class="card card-block card-stretch card-height card-bottom-border-danger note-detail">
                                                <div class="card-header d-flex justify-content-between pb-1">
                                                    <div class="icon iq-icon-box-2 icon-border-danger rounded">
                                                    <i class="fa-regular fa-square-check" style="padding-bottom: 5px;"></i>
                                                    </div>
                                                    <div class="card-header-toolbar d-flex align-items-center">                                                                
                                                        <div class="card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                                <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton7" data-toggle="dropdown" aria-expanded="false" role="button">
                                                                <i class="fa-solid fa-trash-can"></i>
                                                                </span>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="note-dropdownMenuButton7" style="">
                                                                    <a href="#" class="dropdown-item new-note4" data-toggle="modal" data-target="#new-note4"><i class="las la-eye mr-3"></i>View</a>
                                                                    <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                                    <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="https://templates.iqonic.design/note-plus/laravel/public/#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body rounded">
                                                    <h4 class="card-title">Example To Do</h4>
                                                    <div class="checkbox mb-2">
                                                        <input type="checkbox" class="checkbox-input mr-3" id="checkbox18">
                                                        <label for="checkbox18" class="note-checkbox mb-0">
Please register</label>
                                                    </div>
                                                    <div class="checkbox mb-2">
                                                        <input type="checkbox" class="checkbox-input mr-3" id="checkbox19">
                                                        <label for="checkbox19" class="note-checkbox mb-0">to create</label>
                                                    </div>
                                                    <div class="checkbox mb-2">
                                                        <input type="checkbox" class="checkbox-input mr-3" id="checkbox20">
                                                        <label for="checkbox20" class="note-checkbox mb-0">a to do list.</label>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="d-flex align-items-center justify-content-end note-text note-text-danger">
                                                        <a href="#" class=""><i class="fa-solid fa-lg fa-calendar-day mr-2"></i>@php $today = date('d/m/y'); echo $today; @endphp</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
@stop