@extends('layout.site')
@section('content')

<!-- Video Section -->
<div class="container mt-3">
  <div class="row">
    <div class="col-md-8">
      <!-- Video Player -->
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/FSeGrBw5eFA?si=Iq7cw3Uad2wBnAf6" allowfullscreen></iframe>
      </div>
      <!-- Video Title and Description -->
      <h4 class="mt-3">Video Title</h4>
      <p>Description of the video goes here.</p>
    </div>
    <div class="col-md-4">
      <!-- Related Videos -->
      <h5>Related Videos</h5>
      <ul class="list-group">
        <li class="list-group-item">Video 1</li>
        <li class="list-group-item">Video 2</li>
        <li class="list-group-item">Video 3</li>
        
        <!-- Add more related videos as needed -->
      </ul>
    </div>
  </div>
</div>
@endsection
