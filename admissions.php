<?php include './includes/header.php' ?>
<style>
  table {
    width: 100%;
    border-collapse: collapse;
    border: 1px solid #ddd;
  }

  th,
  td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }

  th {
    color: white;
    background-color: #800000;
    font-weight: bold;
  }

  td {
    background-color: rgba(255, 244, 244, 0.5);
  }
</style>
<div class="internal-content-container">
  <div class="container">
    <div class="row">
      <div class="sidebar col-md-3">
        <div class="sticky">
          <h2 style="background-color: rgba(255, 244, 244, 0.5);border-radius: 20px 20px 0px 0px;">Admissions</h2>
          <ul>
            <li><a class="change" href="#">Programs offered</a></li>
            <li><a class="change" href="#">Fee structure</a></li>
            <li><a class="change" href="#">Scholarships</a></li>
            <li><a class="change" href="#">Value added courses</a></li>
            <li><a class="change" href="#">How to approach</a></li>
          </ul>
        </div>
      </div>
      <div class="column col-md-8">
        <div class="bread-crumb">
          <ul class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Admissions</a></li>
            <span id = "fill"></span>
          </ul>

          <div id="box">
            <h1>Admissions</h1>
          <p>&Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia tempora ullam explicabo debitis blanditiis quo quis est molestias veritatis neque ratione hic optio perferendis, labore nostrum vitae in? Perferendis.</p>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia quia impedit quaerat sint cum pariatur! Quisquam tempora, voluptate itaque aliquam eos quam molestiae sed modi sit alias soluta error eveniet!<p>
          

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  document.querySelectorAll(".change").forEach(item => {
    item.addEventListener("click", function (e) {
      document.getElementById("fill").innerHTML=`<li><a id="fill" href="#">${e.target.innerText.charAt(0).toUpperCase() + e.target.innerText.slice(1).toLowerCase()}</a></li>`;
      switch(e.target.innerText){
        case "PROGRAMS OFFERED" : document.getElementById("box").innerHTML = `<?php include 'programs_offered.php'; ?>`;
        break;
        case "FEE STRUCTURE" :document.getElementById("box").innerHTML = `<?php include 'fee_structure.php'; ?>`; break;
      }
    })
  });
</script>
<?php include './includes/footer.php'; ?>