<?php
/**
 * Template Name: Commercial Dance for Kids
 */
if (!defined('ABSPATH')) {
    exit;
}
get_header();
$home = trailingslashit(home_url('/'));
ms_event_schema(array(
    array(
        'name' => 'Commercial Dance for Kids first class',
        'start' => '2027-01-16T14:00:00+02:00',
        'description' => 'Saturday 14:00. The first class is free if you decide not to continue.',
    ),
));
?>

<section class="wrap section-sm">
  <nav class="crumb" aria-label="Breadcrumb">
    <a href="<?php echo esc_url($home); ?>">Home</a>
    <span aria-hidden="true">/</span>
    <span>Kids</span>
  </nav>
  <div class="course-hero">
    <div class="stack-lg" style="max-width:640px">
      <p class="meta">Kids · Ages 7 to 10 · Tampere</p>
      <h1 class="h">Commercial Dance for Kids</h1>
      <p class="sub" style="font-size:20px">Real choreography, learned through games, for ages 7 to 10.</p>
      <div class="actions" style="align-items:center">
        <span class="chip"><i></i>Enrollment open</span>
        <span class="chip mute"><i></i>Sat 16 Jan start</span>
      </div>
      <div class="actions">
        <a class="btn btn-primary" href="#form">Enroll</a>
        <a class="btn btn-outline" href="#schedule">Schedule and price</a>
      </div>
    </div>
    <?php ms_photo(array(
        'slot' => 'kids-hero',
        'ph' => 'ph-4',
        'ratio' => 'ratio-4x5',
        'label' => 'Placeholder for a photo of a Kids Commercial class',
        'alt' => 'Commercial dance class for kids aged 7 to 10 in Tampere',
        'priority' => true,
    )); ?>
  </div>
</section>

<section class="wrap section">
  <div class="section-head stack">
    <p class="meta">What happens in class</p>
    <h2 class="h">Real dances, learned through play</h2>
  </div>
  <div class="split-media mt-48">
    <?php ms_photo(array(
        'slot' => 'kids-class',
        'ph' => 'ph-2',
        'label' => 'Placeholder for a photo from Kids Commercial',
        'alt' => 'Kids learning commercial choreography in Tampere',
    )); ?>
    <article class="card1 card-body">
      <p class="sub">A fun and structured class that develops rhythm, coordination, strength and flexibility through dance, games and creative exercises. Kids learn real choreographies in a playful way and perform at the end of each semester.</p>
    </article>
  </div>
</section>

<section class="wrap-wide">
  <div class="pan panel-pad">
    <div class="section-head stack">
      <p class="meta">This group is for you if</p>
      <h2 class="h">Your child loves to move</h2>
      <p class="sub">Your child loves to move and wants to learn real dances with friends. No experience needed. Children who start in Mini move up here when they are ready.</p>
    </div>
  </div>
</section>

<section id="schedule" class="wrap-wide">
  <div class="pan panel-pad">
    <div class="section-head stack">
      <p class="meta">Schedule and price (TBC)</p>
      <h2 class="h">Spring 2027</h2>
    </div>
    <article class="card2 card-body-sm mt-48">
      <p class="meta">Kids · Ages 7 to 10</p>
      <h3 class="h card-title">Saturday 14:00</h3>
      <div class="stack mt-24" style="gap:4px">
        <div class="row"><span class="e">⏰</span><em>Saturday 14:00</em></div>
        <div class="row"><span class="e">⏰</span><em>Starts on Saturday 16 January</em></div>
        <div class="row"><span class="e">📍</span>DanceDaily, Satakunnankatu 29, Tampere</div>
      </div>
      <div class="price-row">
        <span class="price-bar"></span>
        <div>
          <div class="price">€140</div>
          <div class="price-note">per semester (16 lessons), paid in two equal instalments</div>
        </div>
        <a class="btn btn-accent btn-sm" href="#form">Register</a>
      </div>
      <p class="sub mt-24" style="font-size:15px">The first class is free if you decide not to continue, otherwise it is part of the course. The price is higher than in autumn because this semester has more lessons.</p>
    </article>
  </div>
</section>

<section class="wrap section">
  <div class="section-head stack">
    <p class="meta">How enrollment works</p>
    <h2 class="h">Four simple steps</h2>
  </div>
  <?php ms_enrollment_steps('shared'); ?>
</section>

<section class="wrap-wide">
  <div class="pan panel-pad">
    <div class="section-head stack">
      <p class="meta">Class dates</p>
      <h2 class="h">Saturdays</h2>
      <p class="sub">16 lessons. No class on Saturday 27 March and 1 May. No classes during school holidays or public holidays.</p>
    </div>
    <div class="mt-48"><?php ms_date_pills(ms_saturday_dates()); ?></div>
  </div>
</section>

<section class="wrap section faq-layout">
  <div class="section-head stack">
    <p class="meta">FAQ</p>
    <h2 class="h">Kids questions</h2>
    <div><a class="lnk" href="<?php echo esc_url($home . 'faq/'); ?>">All questions <?php echo ms_icon('arrow'); ?></a></div>
  </div>
  <div class="faq-list">
    <?php
    ms_faq_item('Does my child need experience?', 'No. Most children in the group started as beginners.', true);
    ms_faq_item('Can I watch the class?', 'Parents wait outside, children usually settle in better that way. You are invited to the performance at the end of the semester. [TBC]');
    ms_faq_item('My child is 10. Kids or K-Pop?', 'Kids if your child likes games and a playful class, K-Pop if the music is the main reason to dance. The first class is free if you decide not to continue, so you can try one.');
    ms_faq_item('What if my child decides they do not like it?', 'The first class is free if you decide not to continue, and registration has no payment obligation. You decide after the first class.');
    ms_faq_item('What if we miss a class?', 'Let me know in advance. We will figure something out together.');
    ?>
  </div>
</section>

<section class="wrap-wide">
  <div class="pan panel-pad-lg">
    <div class="register-grid">
      <div class="stack-lg">
        <div class="section-head stack">
          <p class="meta">Register</p>
          <h2 class="h">Join Kids Commercial</h2>
          <p class="sub">One short form. Free, with no payment obligation.</p>
        </div>
        <?php ms_form('kids'); ?>
      </div>
      <aside class="card2 card-body-sm">
        <p class="meta">What happens next</p>
        <p class="sub" style="font-size:16px">Mariia replies and confirms the first class on Saturday 16 January at 14:00.</p>
        <p class="sub" style="font-size:16px">After the first class you decide if you join the semester.</p>
        <p class="sub" style="font-size:16px">The first invoice (50%) comes after you confirm.</p>
      </aside>
    </div>
  </div>
</section>

<?php
get_footer();
