@extends('front-end.master')
@section('title')
    Volunteer
@endsection
@section('content')

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Volunteer Information</div>

                        <div class="card-body">
                            <form method="POST" action="{{route('volunteer.store')}}">
                                @csrf

                                <div class="form-group">
                                    <label for="name">Full Name</label>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter your full name" required>
                                </div>

                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <textarea id="address" name="address" class="form-control" placeholder="Enter your address" required></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email address" required>
                                </div>

                                <div class="form-group">
                                    <label for="phone_number">Phone Number</label>
                                    <input type="text" id="phone_number" name="phone_number" class="form-control" placeholder="Enter your phone number" required>
                                </div>

                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <select id="gender" name="gender" class="form-control" required>
                                        <option value="">Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label for="date_of_birth">Date of Birth</label>
                                    <input type="date" id="date_of_birth" name="date_of_birth" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="profession">Profession</label>
                                    <input type="text" id="profession" name="profession" class="form-control" placeholder="Enter your profession" required>
                                </div>

                                <div class="form-group">
                                    <label for="education">Education Level</label>
                                    <select id="education" name="education" class="form-control" required>
                                        <option value="-None-">-None-</option>
                                        <option value="Masters / Post Graduation /Equivalent">Masters / Post Graduation /Equivalent</option>
                                        <option value="Bachelor /Hons /Equivalent">Bachelor /Hons /Equivalent</option>
                                        <option value="Higher Secondary / A Level /Alim /Equivalent">Higher Secondary / A Level /Alim /Equivalent</option>
                                        <option value="Secondary School /) Levels /Dakhil Equivalent">Secondary School /) Levels /Dakhil Equivalent</option>
                                        <option value="High School (Grade 6-10)">High School (Grade 6-10)</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="last_educational_institution">Last Educational Institution</label>
                                    <input type="text" id="last_educational_institution" name="last_educational_institution" class="form-control" placeholder="Enter your last educational institution" required>
                                </div>

                                <div class="form-group">
                                    <label for="blood_group">Blood Group</label>
                                    <select id="blood_group" name="blood_group" class="form-control" required>
                                        <option value="-None-">-None-</option>
                                        <option value="A Positive (A+)">A Positive (A+)</option>
                                        <option value="A Negative (A-)">A Negative (A-)</option>
                                        <option value="B Positive (B+)">B Positive (B+)</option>
                                        <option value="B Negative (B-)">B Negative (B-)</option>
                                        <option value="AB Positive (AB+)">AB Positive (AB+)</option>
                                        <option value="AB Negative (AB-)">AB Negative (AB-)</option>
                                        <option value="O Positive (O+)">O Positive (O+)</option>
                                        <option value="O Negative (O-)">O Negative (O-)</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="skills">Skills</label>
                                    <textarea id="skills" name="skills" class="form-control" placeholder="Enter your skills" required></textarea>
                                </div>

                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-primary btn-lg mr-5" onclick="return confirm('Are you sure to submit the form?')">Submit</button>
                                    <button type="reset" class="btn btn-danger btn-lg">Reset</button>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
