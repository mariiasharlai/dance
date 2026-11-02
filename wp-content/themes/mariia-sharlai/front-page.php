<?php
/**
 * English homepage. Finnish front falls through to page.php so this
 * template does not replace /fi/home-suomi/.
 */
if (!defined('ABSPATH')) {
    exit;
}

if (!ms_is_english()) {
    include get_template_directory() . '/page.php';
    return;
}

get_header();
$home = trailingslashit(home_url('/'));
?>

<section class="wrap section-sm">
  <div class="hero-copy">
    <p class="meta">Dance classes for kids and teens · Tampere · Taught by Mariia</p>
    <h1 class="h">Small-group dance classes in Tampere</h1>
    <p class="lead">Small groups for ages 3 to 16: rhythm, games and real choreography.</p>
  </div>

  <div class="grid-2 mt-64">
    <article class="card1">
      <?php ms_photo(array(
          'slot' => 'hero-kids',
          'ph' => 'ph-1',
          'label' => 'Placeholder for a documentary photo of children dancing in the studio',
          'alt' => 'Children dancing in a studio in Tampere',
          'chip' => 'Open',
          'priority' => true,
      )); ?>
      <div class="card-body">
        <p class="meta">Ages 3 to 10</p>
        <h2 class="h group-title">Kids</h2>
        <p class="sub">Mini Dance (3 to 6) and Commercial Dance (7 to 10): rhythm, games and a first stage experience.</p>
        <div class="mt-16"><a class="lnk" href="#groups">See classes <?php echo ms_icon('arrow'); ?></a></div>
      </div>
    </article>
    <article class="card1">
      <?php ms_photo(array(
          'slot' => 'hero-kpop',
          'ph' => 'ph-2',
          'label' => 'Placeholder for a documentary photo of a K-Pop class in front of the studio mirror',
          'alt' => 'K-Pop class in a dance studio in Tampere',
          'chip' => 'Open',
          'priority' => true,
      )); ?>
      <div class="card-body">
        <p class="meta">Ages 10 to 16 · Beginners · Intensive</p>
        <h2 class="h group-title">K-Pop</h2>
        <p class="sub">Your first K-Pop choreographies, learned step by step.</p>
        <div class="mt-16"><a class="lnk" href="#groups">See classes <?php echo ms_icon('arrow'); ?></a></div>
      </div>
    </article>
  </div>

  <div class="actions mt-48">
    <a class="btn btn-primary" href="#groups">Enroll</a>
    <a class="btn btn-outline" href="#groups">See classes</a>
  </div>
</section>

<section id="groups" class="wrap-wide">
  <div class="pan panel-pad">
    <div class="between">
      <div class="section-head stack">
        <p class="meta">Enrollment open</p>
        <h2 class="h">Which group is right for you?</h2>
        <p class="sub">Choose by age and level. Not sure? Contact Mariia and she will help you choose.</p>
      </div>
    </div>

    <div class="grid-4 mt-48">
      <article class="card2 card-grow">
        <?php ms_photo(array(
            'slot' => 'mini-class',
            'ph' => 'ph-3',
            'label' => 'Placeholder for a photo of a Mini Dance class',
            'alt' => 'Mini Dance class for ages 3 to 6 in Tampere',
            'chip' => 'Trial 16 Jan',
            'mute' => true,
        )); ?>
        <div class="card-body-sm">
          <p class="meta">Kids · Ages 3 to 6</p>
          <h3 class="h card-title">Mini Dance</h3>
          <p class="sub" style="font-size:15px">Rhythm, games and a first stage experience.</p>
          <div class="stack mt-24" style="gap:4px">
            <div class="row"><span class="e">📍</span>Satakunnankatu 29, Tampere</div>
            <div class="row"><span class="e">⏰</span><em>Saturday (TBC)</em></div>
          </div>
          <div class="price-row">
            <span class="price-bar"></span>
            <div>
              <div class="price">Sign up</div>
              <div class="price-note">Registration open</div>
            </div>
            <a class="btn btn-accent btn-sm" href="<?php echo esc_url($home . 'mini-dance/#form'); ?>">Register</a>
          </div>
        </div>
      </article>

      <article class="card2 card-grow">
        <?php ms_photo(array(
            'slot' => 'kids-class',
            'ph' => 'ph-4',
            'label' => 'Placeholder for a photo of a Kids Commercial class',
            'alt' => 'Commercial dance class for kids in Tampere',
            'chip' => 'Open',
        )); ?>
        <div class="card-body-sm">
          <p class="meta">Kids · Ages 7 to 10</p>
          <h3 class="h card-title">Kids Commercial</h3>
          <p class="sub" style="font-size:15px">Real choreography, learned through games.</p>
          <div class="stack mt-24" style="gap:4px">
            <div class="row"><span class="e">📍</span>Satakunnankatu 29, Tampere</div>
            <div class="row"><span class="e">⏰</span><em>Saturday 14:00</em></div>
          </div>
          <div class="price-row">
            <span class="price-bar"></span>
            <div>
              <div class="price">Sign up</div>
              <div class="price-note">Registration open</div>
            </div>
            <a class="btn btn-accent btn-sm" href="<?php echo esc_url($home . 'commercial-dance-for-kids/#form'); ?>">Register</a>
          </div>
        </div>
      </article>

      <article class="card2 card-grow">
        <?php ms_photo(array(
            'slot' => 'kpop-beginners',
            'ph' => 'ph-5',
            'label' => 'Placeholder for a photo of a K-Pop Beginners class',
            'alt' => 'K-Pop Beginners class in Tampere',
            'chip' => 'Open',
        )); ?>
        <div class="card-body-sm">
          <p class="meta">K-Pop · Ages 10 to 16</p>
          <h3 class="h card-title">K-Pop Beginners</h3>
          <p class="sub" style="font-size:15px">Your first K-Pop choreographies, learned step by step.</p>
          <div class="stack mt-24" style="gap:4px">
            <div class="row"><span class="e">📍</span>Satakunnankatu 29, Tampere</div>
            <div class="row"><span class="e">⏰</span><em>Sat 15:00 · Wed 17:00</em></div>
          </div>
          <div class="price-row">
            <span class="price-bar"></span>
            <div>
              <div class="price">Sign up</div>
              <div class="price-note">Registration open</div>
            </div>
            <a class="btn btn-accent btn-sm" href="<?php echo esc_url($home . 'k-pop-course/#beginners'); ?>">Register</a>
          </div>
        </div>
      </article>

      <article class="card2 card-grow">
        <?php ms_photo(array(
            'slot' => 'kpop-intensive',
            'ph' => 'ph-6',
            'label' => 'Placeholder for a photo of a K-Pop Intensive class',
            'alt' => 'K-Pop Intensive class in Tampere',
            'chip' => 'Open',
        )); ?>
        <div class="card-body-sm">
          <p class="meta">K-Pop · Ages 10 to 16</p>
          <h3 class="h card-title">K-Pop Intensive</h3>
          <p class="sub" style="font-size:15px">Faster pace, longer choreographies, performance level.</p>
          <div class="stack mt-24" style="gap:4px">
            <div class="row"><span class="e">📍</span>Satakunnankatu 29, Tampere</div>
            <div class="row"><span class="e">⏰</span><em>Sat 16:00 · Wed 17:00</em></div>
          </div>
          <div class="price-row">
            <span class="price-bar"></span>
            <div>
              <div class="price">Sign up</div>
              <div class="price-note">Registration open</div>
            </div>
            <a class="btn btn-accent btn-sm" href="<?php echo esc_url($home . 'k-pop-course/#intensive'); ?>">Register</a>
          </div>
        </div>
      </article>
    </div>
  </div>
</section>

<section class="wrap section">
  <div class="section-head stack">
    <p class="meta">What's new</p>
    <h2 class="h">Coming up</h2>
  </div>
  <div class="grid-3 mt-48">
    <article class="card1">
      <?php ms_photo(array(
          'slot' => 'winter-performance',
          'ph' => 'ph-4',
          'label' => 'Placeholder for a photo from the winter performance',
          'alt' => 'Winter dance performance in Tampere',
      )); ?>
      <div class="card-body">
        <p class="meta">Performance · Free entry</p>
        <h3 class="h event-title">Winter performance</h3>
        <p class="sub" style="font-size:16px">Everyone is welcome.</p>
        <div class="stack mt-24" style="gap:4px">
          <div class="row"><span class="e">⏰</span><em>Friday 4 December, 18:00</em></div>
          <div class="row"><span class="e">📍</span>Sammon koulu, building B, Kaupinkatu 29, Tampere</div>
        </div>
      </div>
    </article>
    <article class="card1">
      <?php ms_photo(array(
          'slot' => 'semester-start',
          'ph' => 'ph-1',
          'label' => 'Placeholder for a photo from the first class of the semester',
          'alt' => 'First dance class of the spring semester',
      )); ?>
      <div class="card-body">
        <p class="meta">Enrollment</p>
        <h3 class="h event-title">Semester starts 16 January</h3>
        <p class="sub" style="font-size:16px">Places are open now.</p>
        <div class="stack mt-24" style="gap:4px">
          <div class="row"><span class="e">⏰</span><em>Saturday classes from 16 January</em></div>
          <div class="row"><span class="e">⏰</span><em>Wednesday K-Pop from 20 January</em></div>
        </div>
      </div>
    </article>
    <article class="card1">
      <?php ms_photo(array(
          'slot' => 'spring-performance',
          'ph' => 'ph-6',
          'label' => 'Placeholder for a photo from a past spring performance',
          'alt' => 'Spring dance performance',
      )); ?>
      <div class="card-body">
        <p class="meta">Performance · Tickets</p>
        <h3 class="h event-title">Spring performance</h3>
        <p class="sub" style="font-size:16px">Parents buy tickets themselves.</p>
        <div class="stack mt-24" style="gap:4px">
          <div class="row"><span class="e">⏰</span><em>Date and place to be announced</em></div>
        </div>
      </div>
    </article>
  </div>
</section>

<section id="about" class="wrap" style="padding-top:0">
  <div class="pan about-grid">
    <div class="about-photo">
      <?php ms_photo(array(
          'slot' => 'mariia-portrait',
          'ph' => 'ph-3',
          'ratio' => 'ratio-4x5',
          'label' => 'Placeholder for a portrait of Mariia teaching in the studio',
          'alt' => 'Mariia Sharlai, dance teacher in Tampere',
      )); ?>
    </div>
    <div class="stack-lg" style="max-width:600px">
      <p class="meta">Meet Mariia</p>
      <h2 class="h" style="font-size:44px;line-height:1.15">One teacher, small groups, a calm pace</h2>
      <p class="sub" style="font-size:18px">I've been teaching dance since 2017, working with kids, teens, and adults. I trained in ballet and contemporary dance in Ukraine and have been based in Tampere since 2022.</p>
      <p class="sub" style="font-size:18px">I believe dance should feel accessible, expressive, and fun for everyone, regardless of age or experience. My classes are held in small groups, which means every student gets real attention and progresses at their own pace.</p>
      <p class="sub" style="font-size:18px">I adapt to each group, so language is never a barrier. I do my best to make every student feel seen and supported, whether it's their very first class or their hundredth.</p>
    </div>
  </div>
</section>

<section id="enrollment" class="wrap section">
  <div class="section-head stack">
    <p class="meta">How enrollment works</p>
    <h2 class="h">Four simple steps</h2>
    <p class="sub">Short form, a first class, a clear decision, and invoices in two parts.</p>
  </div>
  <?php ms_enrollment_steps('shared'); ?>
  <div class="mt-40"><a class="btn btn-primary" href="#groups">Enroll</a></div>
</section>

<section id="ladder" class="wrap-wide">
  <div class="pan panel-pad">
    <div class="section-head stack">
      <p class="meta">Growing up with us</p>
      <h2 class="h">Dancers grow here</h2>
      <p class="sub">Some of our students joined the youngest group at 3 or 4 years old and are still dancing with us at 8. Start small, move up when you are ready.</p>
    </div>
    <div class="grid-4 mt-48" style="align-items:end">
      <article class="card2 ladder-card">
        <p class="meta">Ages 3 to 6</p>
        <h3 class="h card-title">Mini Dance</h3>
        <p class="sub" style="font-size:15px">Rhythm, games and a first stage experience.</p>
      </article>
      <article class="card2 ladder-card">
        <p class="meta">Ages 7 to 10</p>
        <h3 class="h card-title">Kids Commercial</h3>
        <p class="sub" style="font-size:15px">Real choreography, learned through games.</p>
      </article>
      <article class="card2 ladder-card">
        <p class="meta">K-Pop · Ages 10 to 16</p>
        <h3 class="h card-title">K-Pop Beginners</h3>
        <p class="sub" style="font-size:15px">Your first K-Pop choreographies, learned step by step.</p>
      </article>
      <article class="card2 ladder-card">
        <p class="meta">K-Pop · Ages 10 to 16</p>
        <h3 class="h card-title">K-Pop Intensive</h3>
        <p class="sub" style="font-size:15px">Faster pace, longer choreographies, performance level.</p>
      </article>
    </div>
  </div>
</section>

<section id="faq" class="wrap section faq-layout">
  <div class="section-head stack">
    <p class="meta">FAQ</p>
    <h2 class="h">Good to know</h2>
    <p class="sub">The questions parents ask most.</p>
    <div><a class="lnk" href="<?php echo esc_url($home . 'faq/'); ?>">All questions <?php echo ms_icon('arrow'); ?></a></div>
  </div>
  <div class="faq-list">
    <?php
    ms_faq_item('Do I need any experience?', 'Not at all. Most groups are open to complete beginners. Just bring the desire to move.', true);
    ms_faq_item('Is there a trial class?', 'The semester starts on Saturday 16 January, Wednesday classes begin on 20 January. The first class in any group is free if you decide not to continue, and part of the course if you join. The new Mini group has an official free trial class on 16 January. If you would like to try a class in the middle of the semester, contact me and you get a free trial class.');
    ms_faq_item('How big are the groups?', 'Small. Everyone gets personal attention, and the atmosphere is relaxed and supportive.');
    ms_faq_item('What should I wear?', 'Comfortable clothes you can move in: leggings, a top, joggers. Socks or dance shoes, no outdoor shoes. No jeans, no jewellery, hair tied back.');
    ms_faq_item('Can parents watch the class?', 'For ages 3 to 6, parents can stay nearby. For older groups, parents wait outside: children usually settle in much better that way.');
    ?>
  </div>
</section>

<section id="contact" class="wrap-wide">
  <div class="pan contact-panel">
    <p class="meta">Contact</p>
    <h2 class="h">Questions before you enroll?</h2>
    <p class="sub" style="max-width:520px">Write to Mariia. Choose the channel that is easiest for you.</p>
    <div class="actions">
      <a class="btn btn-primary" href="#groups">Enroll</a>
      <a class="btn btn-outline" href="https://wa.me/358408574850">WhatsApp</a>
      <a class="btn btn-outline" href="https://t.me/+358408574850">Telegram</a>
      <a class="btn btn-outline" href="mailto:mariiasharlai@gmail.com">Email</a>
    </div>
    <p class="sub social-line">Instagram @mariiasharlai_dance · TikTok @dance.sharlai</p>
    <p class="sub social-line">Classes are held at DanceDaily studio, Satakunnankatu 29, 33210 Tampere.</p>
  </div>
</section>

<?php
get_footer();
