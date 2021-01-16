@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header text-center">CUYANG CHAT</div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <input v-model="search" type="search" class="form-control" placeholder="Cari Pengguna Disini">
                    </div>
                    <ul class="list-user list-group list-group-flush">
                        <a v-for="(user, index) in users" v-bind:key="index" v-if="user.id != id" :class="['list-group-item d-flex justify-content-between align-items-center list-group-item-action', {
                                'active': isActive === index && search == '' ? true : false
                            }]" v-on:click="fetchMessages(user.id)">
                            <div class="media">
                                @if(!Auth()->user()->profile_picture == NULL)
                                <img class="mr-3 rounded-sm rounded-circle" src="user.avatar" alt="profile">
                                @else
                                <img class="mr-3 rounded-sm rounded-circle" src="{{ url('users/default_profile_picture.png') }}" alt="profile">
                                @endif
                                <div class="media-body">
                                    <strong>@{{ user.name }}</strong>
                                    <p v-if="user.content">
                                        @{{
                                            (id != user.to_id ? 'Anda: ' : '')
                                            + (user.content.length > 20 
                                            ? user.content.substr(0, 20) + '...' 
                                            : user.content)
                                        }}
                                    </p>
                                </div>
                            </div>
                            <span v-if="user.count" class="badge badge-primary badge-pill mr-3">@{{ user.count }}</span>
                        </a>
                    </ul>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body card-message" id="card-message-scroll">
                            <ul v-if="isActive != null" class="list-group list-group-flush">
                                <div v-for="(message, index) in messages" v-bind:key="index">
                                    <li v-if="message.from_id != {{ auth()->user()->id }}" class="list-group-item">
                                        <div class="list-message-item">
                                            <div class="media">
                                                @if(!Auth()->user()->profile_picture == NULL)
                                                <img class="mr-3 rounded-sm rounded-circle" src="user.avatar" alt="profile">
                                                @else
                                                <img class="mr-3 rounded-sm rounded-circle" src="{{ url('users/default_profile_picture.png') }}" alt="profile">
                                                @endif
                                                <div class="media-body">
                                                    <div class="alert alert-primary mb-0">
                                                        @{{ message.content }}
                                                    </div>
                                                    <small><i>@{{ new Date(message.created_at).toLocaleDateString()}}</i></small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li v-else class="list-group-item">
                                        <div class="list-message-item right">
                                            <div class="alert alert-secondary mb-0">
                                                @{{ message.content }}
                                            </div>
                                            <small class="float-right"><i>@{{ new Date(message.created_at).toLocaleDateString()}}</i></small>
                                        </div>
                                    </li>
                                </div>
                            </ul>
                            <h5 v-else class="text-center">Pilih Pengguna untuk Memulai chat</h5>
                        </div>
                    </div>
                    <div v-if="isActive != null" class="form-group mt-3">
                        <form id="form" @submit.prevent="sendMessage">
                            <div class="form-row">
                                <div class="form-group col-md-10">
                                    <input v-model="form.content" type="text" class="form-control" placeholder="Tulis pesan...">
                                </div>
                                <div class="form-group col-md-2">
                                    <button id="btnSubmit" type="submit" class="btn btn-primary">Kirim</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection