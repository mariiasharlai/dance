<?php
/**
 * Template Name: K-Pop Course
 */
if (!defined('ABSPATH')) {
    exit;
}
get_header();
$home = trailingslashit(home_url('/'));
ms_event_schema(array(
    array(
        'name' => 'K-Pop Beginners first class',
        'start' => '2027-01-16T15:00:00+02:00',
        'description' => 'Beginners at 15:00. Intensive is at 16:00.',
    ),
    array(
        'name' => 'K-Pop Intensive first class',
        'start' => '2027-01-16T16:00:00+02:00',
        'description' => 'Intensive at 16:00. Beginners is at 15:00.',
    ),
));
?>

<section class="wrap section-sm">
  <nav class="crumb" aria-label="Breadcrumb">
    <a href="<?php echo esc_url($home); ?>">Home</a>
    <span aria-hidden="true">/</span>
    <span>K-Pop</span>
  </nav>
  <div class="course-hero">
    <div class="stack-lg" style="max-width:640px">
      <p class="meta">K-Pop · Ages 10 to 16 · Tampere</p>
      <h1 class="h">K-Pop classes in Tampere</h1>
      <p class="sub" style="font-size:20px">Your first K-Pop choreographies, learned step by step. Two levels, one teacher, small groups.</p>
      <div class="actions" style="align-items:center">
        <span class="chip"><i></i>Enrollment open</span>
        <span class="chip mute"><i></i>Sat 16 Jan start</span>
      </div>
      <div class="actions">
        <a class="btn btn-primary" href="#form">Enroll</a>
        <a class="btn btn-outline" href="#levels">Compare levels</a>
      </div>
      <div class="actions" style="gap:8px">
        <a class="pill" href="#beginners">Beginners</a>
        <a class="pill" href="#intensive">Intensive</a>
      </div>
    </div>
    <?php ms_photo(array(
        'slot' => 'kpop-hero',
        'ph' => 'ph-5',
        'ratio' => 'ratio-4x5',
        'label' => 'Placeholder for a photo of a K-Pop class in the studio',
        'alt' => 'K-Pop dance class for teens in Tampere',
        'priority' => true,
    )); ?>
  </div>
</section>

<section class="wrap section">
  <div class="section-head stack">
    <p class="meta">What happens in class</p>
    <h2 class="h">Learn real choreography</h2>
  </div>
  <div class="split-media mt-48">
    <?php ms_photo(array(
        'slot' => 'kpop-class',
        'ph' => 'ph-2',
        'label' => 'Placeholder for a photo of dancers rehearsing a K-Pop choreography',
        'alt' => 'Dancers rehearsing K-Pop choreography in Tampere',
    )); ?>
    <div class="stack-lg">
      <article id="beginners" class="card1 card-body">
        <p class="meta">Level 1 · Beginners</p>
        <h2 class="h" style="font-size:30px;line-height:1.2">K-Pop Beginners</h2>
        <p class="sub">Your first K-Pop choreographies, learned step by step.</p>
        <p class="sub" style="font-size:15px">We break each choreography into small parts and work on timing and style until it comes together. By the end of the semester you have learned several full routines and filmed your progress. The semester ends with a group performance.</p>
      </article>
      <article id="intensive" class="card1 card-body">
        <p class="meta">Level 2 · Intensive</p>
        <h2 class="h" style="font-size:30px;line-height:1.2">K-Pop Intensive</h2>
        <p class="sub">Faster pace, longer choreographies, performance level.</p>
        <p class="sub" style="font-size:15px">We learn full choreographies faster and work on details: clean timing, stage presence, group formations. The semester ends with a group performance, and we film content along the way.</p>
      </article>
    </div>
  </div>
</section>

<section class="wrap-wide">
  <div class="pan panel-pad">
    <div class="section-head stack">
      <p class="meta">Who it's for</p>
      <h2 class="h">Ages 10 to 16</h2>
    </div>
    <div class="grid-3 mt-48" style="grid-template-columns:repeat(auto-fit,minmax(min(280px,100%),1fr))">
      <article class="card2 card-body-sm">
        <h3 class="h" style="font-size:24px">Choose Beginners if</h3>
        <p class="sub" style="font-size:16px">You love K-Pop but have never danced in a group, or you started recently. No experience needed.</p>
      </article>
      <article class="card2 card-body-sm">
        <h3 class="h" style="font-size:24px">Choose Intensive if</h3>
        <p class="sub" style="font-size:16px">You already have dance or K-Pop class experience, learn choreography quickly and want a harder challenge. New students join after a trial class so that you are placed in the right group.</p>
      </article>
      <article class="card2 card-body-sm">
        <h3 class="h" style="font-size:24px">Not sure?</h3>
        <p class="sub" style="font-size:16px">Choose Beginners. After the trial class I will tell you if Intensive fits better. You can switch during the semester. Just tell me.</p>
      </article>
    </div>
  </div>
</section>

<section id="levels" class="wrap-wide">
  <div class="pan panel-pad">
    <div class="section-head stack">
      <p class="meta">Schedule and price (TBC)</p>
      <h2 class="h">Pick your level</h2>
    </div>
    <div class="grid-2 mt-48">
      <article class="card2 card-body-sm">
        <p class="meta">K-Pop · Beginners</p>
        <h3 class="h card-title">Beginners</h3>
        <div class="stack mt-24" style="gap:4px">
          <div class="row"><span class="e">⏰</span><em>Saturday 15:00 (from 16 January)</em></div>
          <div class="row"><span class="e">⏰</span><em>Wednesday 17:00, shared class (from 20 January)</em></div>
          <div class="row"><span class="e">📍</span>DanceDaily, Satakunnankatu 29, Tampere</div>
        </div>
        <div class="price-row">
          <span class="price-bar"></span>
          <div>
            <div class="price">€140</div>
            <div class="price-note">per semester, one day a week. €260 for two days (16 lessons per day)</div>
          </div>
          <a class="btn btn-accent btn-sm" href="#form">Register</a>
        </div>
      </article>
      <article class="card2 card-body-sm">
        <p class="meta">K-Pop · Intensive</p>
        <h3 class="h card-title">Intensive</h3>
        <div class="stack mt-24" style="gap:4px">
          <div class="row"><span class="e">⏰</span><em>Saturday 16:00 (from 16 January)</em></div>
          <div class="row"><span class="e">⏰</span><em>Wednesday 17:00, shared class (from 20 January)</em></div>
          <div class="row"><span class="e">📍</span>DanceDaily, Satakunnankatu 29, Tampere</div>
        </div>
        <div class="price-row">
          <span class="price-bar"></span>
          <div>
            <div class="price">€140</div>
            <div class="price-note">per semester, one day a week. €260 for two days (16 lessons per day)</div>
          </div>
          <a class="btn btn-accent btn-sm" href="#form">Register</a>
        </div>
      </article>
    </div>
    <p class="sub mt-24" style="font-size:15px">The price is higher than in autumn because this semester has more lessons. Paid in two equal instalments.</p>
    <article id="wednesday" class="card2 card-body-sm mt-24">
      <p class="meta">Wednesday</p>
      <h3 class="h card-title">Shared class for both levels</h3>
      <p class="sub">Wednesday class is open to all K-Pop dancers, Beginners and Intensive together. The group is small, so every dancer gets a lot of personal attention.</p>
    </article>
  </div>
</section>

<section class="wrap section">
  <div class="section-head stack">
    <p class="meta">How enrollment works</p>
    <h2 class="h">Four simple steps</h2>
    <p class="sub">Free to register, no payment obligation.</p>
  </div>
  <?php ms_enrollment_steps('shared'); ?>
</section>

<section class="wrap-wide">
  <div class="pan panel-pad">
    <div class="section-head stack">
      <p class="meta">Class dates</p>
      <h2 class="h">Every class of the semester</h2>
    </div>
    <div class="grid-2 mt-48">
      <article class="card2 card-body-sm">
        <div class="between">
          <h3 class="h" style="font-size:24px">Saturdays</h3>
          <span class="meta">16 classes</span>
        </div>
        <div class="mt-24"><?php ms_date_pills(ms_saturday_dates()); ?></div>
      </article>
      <article class="card2 card-body-sm">
        <div class="between">
          <h3 class="h" style="font-size:24px">Wednesdays</h3>
          <span class="meta">16 classes</span>
        </div>
        <div class="mt-24"><?php ms_date_pills(ms_wednesday_dates()); ?></div>
      </article>
    </div>
    <p class="sub mt-24" style="font-size:15px">No class on Saturday 27 March and 1 May, or on Wednesday 3 March (winter holiday). No classes during school holidays or public holidays.</p>
  </div>
</section>

<section class="wrap section faq-layout">
  <div class="section-head stack">
    <p class="meta">FAQ</p>
    <h2 class="h">Good to know</h2>
    <div><a class="lnk" href="<?php echo esc_url($home . 'faq/'); ?>">All questions <?php echo ms_icon('arrow'); ?></a></div>
  </div>
  <div class="faq-list">
    <?php
    ms_faq_item('Which level should I choose?', 'If you are not sure, choose Beginners. After the trial class I will tell you if Intensive fits better. You can switch between Beginners and Intensive during the semester. Just tell me.', true);
    ms_faq_item('Do I have to come twice a week?', 'No. One day a week is 140€, two days is 260€.');
    ms_faq_item('Do you film in class?', 'Yes, we film content along the way. If you do not want to be on video, tell me before class.');
    ms_faq_item('What should I wear?', 'Comfortable clothes you can move in, socks or dance shoes. No jeans, no jewellery, hair tied back.');
    ms_faq_item('What happens at the end of the semester?', 'A group performance. [TBC]');
    ?>
  </div>
</section>

<section class="wrap-wide">
  <div class="pan panel-pad-lg">
    <div class="register-grid">
      <div class="stack-lg">
        <div class="section-head stack">
          <p class="meta">Register</p>
          <h2 class="h">Join K-Pop this semester</h2>
          <p class="sub">One short form. Free, with no payment obligation.</p>
        </div>
        <?php ms_form('kpop'); ?>
      </div>
      <aside class="card2 card-body-sm">
        <p class="meta">What happens next</p>
        <p class="sub" style="font-size:16px">Mariia replies and confirms the first class on Saturday 16 January.</p>
        <p class="sub" style="font-size:16px">After the first class you decide if you join the semester.</p>
        <p class="sub" style="font-size:16px">Two invoices of 50%.</p>
      </aside>
    </div>
  </div>
</section>

<?php
get_footer();
