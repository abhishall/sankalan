@extends('_layouts.master')
@section('title', 'About | ')
@section('content')
<div class="banner">
    <div class="banner-content">
        <h1 class="banner-subtitle">About</h1>
        <h2 class="banner-title">What is it?</h2>
        <p>Sankalan is the annual tech fest of Dept Of Computer Science, University of Delhi (DUCS).</p>
    </div>
</div>
<div class="content">
    <div class="section bg-white about">
        <p>
            Sankalan, the annual technical festival of Department of Computer Science, University of Delhi, is one of the highly acclaimed Computer Science festivals in India. It was conceived in 2005 with the aim of encouraging technology enthusiasts to
            showcase their inventiveness through a wide array of technical and non technical events that promise to educate and inspire.
        </p>
        <p>
            Over the years, Sankalan has grown to be a widely anticipated event that witnesses massive participation of young minds from leading institutions. The fest blends a plethora of events including coding, quizzes, gaming, debates and a lot more,
            offering something for each and everyone. It is organized by the Dept. of Computer Science, University of Delhi and serves as a perfect symposium for leading scientific minds and influential thinkers.
        </p>
        <p>
            The word Sankalan means compilation; compilation of knowledge, talent, ideas, spirit and most importantly, codes! With a slew of technical and non-technical events on the menu, Sankalan is a geek feast. The developers get engaged with coding marathon
            Code-a-thon, Web development competition Spin-a-Web and many more. With Mind Matters for the quiz masters, Techno Speak for the nerds and LAN Gaming for the gamers, Sankalan has it all! So this March, get set and be prepared
            to celebrate technology with Sankalan’ 2019.
        </p>
        <p>
            <strong>When is it? <br/></strong>
            Saturday, March 9th, 2019 &ndash; Sunday, March 10th, 2019
        </p>
        <p>
            <strong>Where is it?<br/></strong>
            Coordinates: { <code>28&deg;41'17.2"N 77&deg;12'25.7"E</code> }<br/> 
            Department of Computer Science,<br/> 
            Faculty of Mathematical Sciences,<br/> 
            New Academic Block,<br/> 
            University of Delhi.<br/>
            <a href="https://goo.gl/maps/YqMFB3uxy9m" target="_blank" rel="noopener" data-id="about-direction">Get directions</a> on Google Maps.
        </p>
        <p>
            <strong>For more info:<br/></strong>
            See the <a class="xhr" href="{{ $page->baseUrl }}/faq/" data-id="about-faq">faq page</a>.
        </p>
        <p>
            <strong>For Event details:<br/></strong>
            See the <a class="xhr" href="{{ $page->baseUrl }}/events/" data-id="about-events">events page</a>.
        </p>
        <p>
            <strong>To know what's new in Sankalan 2019<br/></strong>
            See <a class="xhr" href="{{ $page->baseUrl }}/whats-new/">What's new in Sankalan 2019</a> page.
        </p>
        <p>
            <strong>For Sponsors:<br/></strong>
            See the <a class="xhr" href="{{ $page->baseUrl }}/sponsors/" data-id="about-sponsors">sponsors page</a>.
        </p>
        <p>
            <strong>To know about Sankalan and its dev team:<br/></strong>
            See the <a class="xhr" href="{{ $page->baseUrl }}/team/" data-id="about-team">team page</a>.
        </p>
        <p>
            <strong>Follow us:<br/></strong>
            Join us on our <a href="https://facebook.com/DUCS.Sankalan" target="_blank" rel="noopener" data-id="about-FB">Facebook page</a> or Follow us on <a href="https://www.instagram.com/sankalan.ducs/" target="_blank"
                rel="noopener" data-id="about-IG">Instagram</a>
        </p>
    </div>
</div>    
@endsection