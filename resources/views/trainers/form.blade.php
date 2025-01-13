@extends('master.layout')
@section('content')
    <section class="appointment-form-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Book an Appointment</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form action="{{ route('appointment.submit') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Your Email</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Your Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="trainer">Select Trainer</label>
                            <select name="trainer" id="trainer" class="form-control">
                                <option value="Rachel Adam">Rachel Adam - Boxing</option>
                                <option value="RLefew D. Loee">RLefew D. Loee - Weight Loss</option>
                                <option value="Robert Cage">Robert Cage - Body Building</option>
                                <option value="Donald Grey">Donald Grey - Karate</option>
                                <option value="Kimberly Stone">Kimberly Stone - Fitness</option>
                                <option value="Keaf Shen">Keaf Shen - Yoga</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="date">Preferred Appointment Date</label>
                            <input type="date" name="date" id="date" class="form-control" required>
                        </div>
                        <button type="submit" class="primary-btn btn-normal">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
