@extends('layouts.main', [
    'title' => 'About Us',
])

@section('content')
    <main>
        <div class="app-cmp-about-header">
            <h1>About Learnnova</h1>
            <p>
                We're on a mission to transform lives through accessible, high-quality education. Join us in building a
                world where learning knows no boundaries.
            </p>
        </div>
        <div class="app-cmp-about-mission">
            <h2>Our Story</h2>
            <p>
                Founded in 2020, Learnnova was born from a simple idea: everyone deserves access to world-class education.
                What started as a small platform with a handful of courses has grown into a global learning community.
            </p>
            <p>
                Today, we serve over 50,000 students worldwide, partnering with industry experts and leading companies to
                deliver courses that matter. Our platform combines cutting-edge technology with pedagogical excellence to
                create engaging, effective learning experiences.
            </p>
            <p>
                We're not just building a platform; we're building a movement. A movement that believes in the power of
                education to transform lives, communities, and the world.
            </p>
        </div>
        <div class="app-cmp-about-values">
            <h2>Our Values</h2>
            <p>These core values guide everything we do at Learnnova</p>
            <ul>
                <li><b>Our Mission</b> To democratize education and make high-quality learning accessible to everyone,
                    anywhere.</li>
                <li><b>Our Passion</b> We believe in the transformative power of education and lifelong learning.</li>
                <li><b>Our Community</b> Building a global community of learners, educators, and industry experts.</li>
                <li><b>Our Commitment</b> Delivering excellence in every course through rigorous quality standards.</li>
            </ul>
        </div>
        <div>
            <div>
                <h2>Our Achievements</h2>
                <p>
                    Milestones that reflect our commitment to excellence
                </p>
            </div>
            <div>
                <table>
                    <tbody>
                        <tr>
                            <td>Over 50,000 active students worldwide</td>
                            <td>Partnerships with 100+ leading companies</td>
                            <td>200+ expert-curated courses</td>
                        </tr>
                        <tr>
                            <td>95% student satisfaction rate</td>
                            <td>Recognized by top educational institutions</td>
                            <td>Award-winning learning platform</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div>
            <h2>Join Us</h2>
            <p>
                Whether you're a student eager to learn, an educator passionate about teaching, or a company looking to
                upskill your workforce, Learnnova has something for you. Explore our courses, connect with our community,
                and start your learning journey today.
            </p>
        </div>
    </main>
@endsection
