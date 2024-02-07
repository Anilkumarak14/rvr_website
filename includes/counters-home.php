<section class="counter-container mx-5">
  <div class="row parallax count">
    <div class="column">
        <div class="counter" >
              <div  id="odometer-students"></div>
              <span class="plus">+</span>
          </div>
      <h5 id="head">Students</h5>
    </div>
    <div class="column">
      <div class="counter" >
            <div  id="odometer-faculty"></div>
            <span class="plus">+</span>
        </div>
      <h5 id="head">Faculty</h5>
    </div>
    <div class="column">
      <div class="counter" >
            <div  id="odometer-staff"></div>
            <span class="plus">+</span>
        </div>
      <h5 id="head">Staff</h5>
    </div>
</div>
</section>
<script src="./js/odometer.js"></script>
<script>
function getOdometer(num, elementId) {
  const od = new Odometer({
  el: document.getElementById(elementId),
  format: "(,ddd).dd",
  duration: 3000,
  theme: "default"
  });
  od.render();
  od.update(num);
  return od;
  }

const odStudents = getOdometer(10000, "odometer-students");
const odFaculty = getOdometer(700, "odometer-faculty");
const odStaff = getOdometer(500, "odometer-staff");
</script>
