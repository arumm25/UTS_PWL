<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="page-header mb-4">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">FAQ</li>
    </ol>
  </nav>
</div>

<div class="card">
  <div class="card-body">
    <div class="accordion" id="faqAccordion">
      <?php if (!empty($faqs)): ?>
        <?php foreach($faqs as $i => $faq): ?>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading-<?= $i ?>">
              <button class="accordion-button <?= $i > 0 ? 'collapsed' : '' ?>"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapse-<?= $i ?>"
                      aria-expanded="<?= $i === 0 ? 'true' : 'false' ?>"
                      aria-controls="collapse-<?= $i ?>">
                <?= esc($faq['question']) ?>
              </button>
            </h2>
            <div id="collapse-<?= $i ?>"
                 class="accordion-collapse collapse <?= $i === 0 ? 'show' : '' ?>"
                 aria-labelledby="heading-<?= $i ?>"
                 data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                <?= nl2br(esc($faq['answer'])) ?>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <p class="text-muted">Belum ada FAQ yang ditambahkan.</p>
      <?php endif; ?>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
