<?php
$lw_page_content = get_field('lw_page_content');

if ($lw_page_content) :
?>


<section class="bg-white py-12">
    <div class="container">
        <div class="row">
            <div class="col block-editor-content md:col-span-8 md:col-start-3">
                <?php echo $lw_page_content; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<script>
    const tabs = document.querySelectorAll(".tabs");
const tab = document.querySelectorAll(".tab");
const panel = document.querySelectorAll(".tab-content");

function onTabClick(event) {

  // deactivate existing active tabs and panel

  for (let i = 0; i < tab.length; i++) {
    tab[i].classList.remove("active");
  }

  for (let i = 0; i < panel.length; i++) {
    panel[i].classList.remove("active");
  }


  // activate new tabs and panel
  event.target.classList.add('active');
  let classString = event.target.getAttribute('data-target');
  console.log(classString);
  document.getElementById('panels').getElementsByClassName(classString)[0].classList.add("active");
}

for (let i = 0; i < tab.length; i++) {
  tab[i].addEventListener('click', onTabClick, false);
}
</script>