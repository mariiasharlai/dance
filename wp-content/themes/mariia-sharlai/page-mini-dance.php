<?php
/**
 * Template Name: Mini Dance
 */
if (!defined('ABSPATH')) {
    exit;
}
get_header();
$home = trailingslashit(home_url('/'));
ms_event_schema(array(
    array(
        'name' => 'Mini Dance free trial class',
        'start' => '2027-01-16',
        'description' => 'Official free trial class for Mini Dance, ages 3 to 6. Time to be confirmed.',
    ),
));
?>

<section class="wrap section-sm">
  <nav class="crumb" aria-label="Breadcrumb">
    <a href="<?php echo esc_url($home); ?>">Home</a>
    <span aria-hidden="true">/</span>
    <span>Mini Dance</span>
  </nav>
  <div class="course-hero">
    <div class="stack-lg" style="max-width:640px">
      <p class="meta">Mini Dance · Ages 3 to 6 · Tampere</p>
      <h1 class="h">Mini Dance</h1>
      <p class="sub" style="font-size:20px">Rhythm, games and a first stage experience for ages 3 to 6.</p>
      <div class="actions" style="align-items:center">
        <span class="chip"><i></i>Enrollment open</span>
        <span class="chip mute"><i></i>Trial 16 Jan</span>
      </div>
      <div class="actions">
        <a class="btn btn-primary" href="#form">Enroll</a>
        <a class="btn btn-outline" href="#schedule">Schedule and price</a>
      </div>
    </div>
    <?php ms_photo(array(
        'slot' => 'mini-hero',
        'ph' => 'ph-3',
        'ratio' => 'ratio-4x5',
        'label' => 'Placeholder for a photo of a Mini Dance class',
        'alt' => 'Mini Dance class for ages 3 to 6 in Tampere',
        'priority' => true,
    )); ?>
  </div>
</section>

<section class="wrap section">
  <div class="section-head stack">
    <p class="meta">What happens in class</p>
    <h2 class="h">A first dance class through play</h2>
  </div>
  <div class="split-media mt-48">
    <?php ms_photo(array(
        'slot' => 'mini-class',
        'ph' => 'ph-1',
        'label' => 'Placeholder for a photo from Mini Dance',
        'alt' => 'Young children in a Mini Dance class in Tampere',
    )); ?>
    <article class="card1 card-body">
      <p class="sub">A 40 minute class built around play. We work on rhythm, coordination, posture and strong, flexible feet and back through games, music and simple choreography. At the end of the semester the children perform for their families.</p>
    </article>
  </div>
</section>

<section class="wrap-wide">
  <div class="pan panel-pad">
    <div class="section-head stack">
      <p class="meta">This group is for you if</p>
      <h2 class="h">A gentle start, no experience needed</h2>
      <p class="sub">Your child is ready for a group but needs a gentle start. No experience needed. Parents can stay nearby during class, and we go at the pace of the children.</p>
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
      <p class="meta">Mini Dance · Ages 3 to 6</p>
      <h3 class="h card-title">Saturday</h3>
      <div class="stack mt-24" style="gap:4px">
        <div class="row"><span class="e">⏰</span><em>Saturday (TBC)</em></div>
        <div class="row"><span class="e">⏰</span><em>Official free trial class on Saturday 16 January [time, TBC]</em></div>
        <div class="row"><span class="e">📍</span>DanceDaily, Satakunnankatu 29, Tampere</div>
      </div>
      <div class="price-row">
        <span class="price-bar"></span>
        <div>
          <div class="price">€120</div>
          <div class="price-note">per semester, paid in two equal instalments</div>
        </div>
        <a class="btn btn-accent btn-sm" href="#form">Register</a>
      </div>
      <p class="sub mt-24" style="font-size:15px">The semester schedule is being confirmed. The group opens when at least 5 children confirm.</p>
    </article>
  </div>
</section>

<section class="wrap section">
  <div class="section-head stack">
    <p class="meta">How enrollment works</p>
    <h2 class="h">Four simple steps</h2>
  </div>
  <?php ms_enrollment_steps('mini'); ?>
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
    <h2 class="h">Mini Dance questions</h2>
    <div><a class="lnk" href="<?php echo esc_url($home . 'faq/'); ?>">All questions <?php echo ms_icon('arrow'); ?></a></div>
  </div>
  <div class="faq-list">
    <?php
    ms_faq_item('Can I stay in the room?', 'Yes. Parents of children aged 3 to 6 can stay nearby. You do not need to join.', true);
    ms_faq_item('What if my child does not want to join in at the first class?', 'This is normal at this age. The trial class is free and your child can watch for a while before joining.');
    ms_faq_item('What if my child is sick?', 'Let me know in advance. We will figure something out together.');
    ms_faq_item('What should my child wear?', 'Comfortable clothes that are easy to move in, socks or dance shoes, hair tied back.');
    ms_faq_item('What happens after the trial class?', 'You tell me if you want to continue. The group opens when at least 5 children confirm, then you receive an invoice.');
    ?>
  </div>
</section>

<section class="wrap-wide">
  <div class="pan panel-pad-lg">
    <div class="register-grid">
      <div class="stack-lg">
        <div class="section-head stack">
          <p class="meta">Register</p>
          <h2 class="h">Join Mini Dance</h2>
          <p class="sub">One short form. Free, with no payment obligation.</p>
        </div>
        <?php ms_form('mini'); ?>
      </div>
      <aside class="card2 card-body-sm">
        <p class="meta">What happens next</p>
        <p class="sub" style="font-size:16px">Mariia replies and confirms the trial class on Saturday 16 January.</p>
        <p class="sub" style="font-size:16px">The group opens when at least 5 children confirm.</p>
        <p class="sub" style="font-size:16px">The first invoice (50%) comes after you confirm.</p>
      </aside>
    </div>
  </div>
</section>

<?php
get_footer();
