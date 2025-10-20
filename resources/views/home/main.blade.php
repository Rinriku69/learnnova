@extends('layouts.main', [
    'title' => 'Home',
])

@section('content')
    <main>
        <div class="app-cmp-inf-header">
            {{-- <div class="bar-vedeo-intro">
                <span>WELCOME TO LEARNNOVA</span>
            </div> --}}
            <h1 className="text-white mb-6">
                Learn Today, Lead Tomorrow
            </h1>
            <p className="text-xl text-blue-100 mb-8">
                Unlock your potential with Learnnova. Access world-class courses,
                learn at your own pace, and achieve your goals with our expert-led programs.
            </p>
            <div className="flex flex-wrap gap-4">
                <Button>
                    Explore Courses
                    <ArrowRight className="w-5 h-5" />
                </Button>
                <Button>
                    Learn More
                </Button>
            </div>
            <div className="relative">
                <div>
                    <img
                        src="x" />
                </div>
            </div>
        </div>
        <div>
            <nav>
                <p>50K+</p>
                <p>Active Students</p>
            </nav>
            <nav>
                <p>200+</p>
                <p>Quality Courses</p>
            </nav>
            <nav>
                <p>100+</p>
                <p>Expert Instructors</p>
            </nav>
            <nav>
                <p>95%</p>
                <p>Success Rate</p>
            </nav>
        </div>
        <div class="app-cmp-inf">
            <span><b>Learn essential career and life skills</b><br>
                Learnnova helps you build in-demand skills fast and
                advance your career in a changing job market.</span>
            <nav class="group-courses">
                <dl class="app-cmp-coursdetail">
                    <nav class="gcousers">
                        <dt><img src="img/logo_icon/FDEV.jpg"></dt>
                        <dd>FULL DEV</dd>
                    </nav>
                    <nav class="gcousers">
                        <dt><img src="img/logo_icon/DS.jpg"></dt>
                        <dd>DATA SCI</dd>
                    </nav>
                    <nav class="gcousers">
                        <dt><img src="img/logo_icon/data_security.jpg"></dt>
                        <dd>DATA SECURITY</dd>
                    </nav>
                </dl>
                <dl class="app-cmp-coursdetail">
                    <nav class="gcousers">
                        <dt><img src="img/logo_icon/FDEV.jpg"></dt>
                        <dd>FULL DEV</dd>
                    </nav>
                    <nav class="gcousers">
                        <dt><img src="img/logo_icon/DS.jpg"></dt>
                        <dd>DATA SCI</dd>
                    </nav>
                    <nav class="gcousers">
                        <dt><img src="img/logo_icon/data_security.jpg"></dt>
                        <dd>DATA SECURITY</dd>
                    </nav>
                </dl>
            </nav>
        </div>
        <div class="">
            <div>
                <h2>Why Choose Learnnova?</h2>
                <p>
                    We provide everything you need to succeed in your learning journey
                </p>
            </div>
            <div>
                <Card>
                    <CardContent className="p-6">
                        <div>
                            <Icon>
                        </div>
                        <h3></h3>
                        <p></p>
                    </CardContent>
                </Card>
            </div>
        </div>
        <div className="">
            <h2 className="">Ready to Start Learning?</h2>
            <p className="">
                Join thousands of students already learning on Learnnova.
                Start your journey today and unlock endless possibilities.
            </p>
            <Button className="gap-2">
                Browse All Courses
                <ArrowRight className="w-5 h-5" />
            </Button>
        </div>
    </main>
@endsection