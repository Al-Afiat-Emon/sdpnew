<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard for student Blah Blah Blah') }}
        </h2>
    <div classs="container-fluid">

      <div class="jumbotron my-4">
      <h1 class="display-3">CREATE NEW POST</h1>
      <p class="lead">create different post of different language and topics.</p>
      <a href="\create_post" class="btn btn-primary btn-lg">click to action!</a>
      </div>

      </x-slot>

  </div>
</x-app-layout>
