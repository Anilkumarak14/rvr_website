<?php include './includes/header.php' ?>

<div class="internal-content-container">
    <div class="container">
        <div class="row">
            <div class="sidebar col-md-3">
                <div class="sticky">
                    <h2 style="background-color: rgba(255, 244, 244, 0.5);border-radius: 20px 20px 0px 0px;">R &amp; D Cell</h2>
                    <ul>
                        <li><a href="#" class="active">Objectives</a></li>
                        <li><a href="#">Research Committee</a></li>
                        <li><a href="#">Policy and Facilities</a></li>
                        <li><a href="#">Research Centres</a></li>
                        <li><a href="#">Areas of Research</a></li>
                        <li><a href="#">Patents</a></li>
                        <li><a href="#">Sponsored Projects</a></li>
                        <li><a href="#">Guides &amp; Scholars</a></li>
                        <li><a href="#">Research Publications</a></li>
                        <li><a href="#">UGC Approved List of Journals</a></li>
                    </ul>
                </div>
            </div>
            <div class="column col-md-8">
                <div class="bread-crumb">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="committees.php">All Committees</a></li>
                        <li><a href="#"></a>R &amp; D Cell</li>
                        <li><a href="#" id="change-text">Objective</a></li>
                    </ul>
                    <div class="committes-content-box">
                        <div class="objective-box">
                             <h1>Objective</h1>
                            <ol>
                                <li>To provide necessary information and guidance to the faculty members for applying Research Projects sponsored by external agencies such as UGC,AICTE, DST, etc.</li>
                                <li>To motivate the faculty members to apply for externally Sponsored Research Projects.</li>
                                <li>To review the progress of ongoing research projects.</li>
                                <li>To take necessary steps so that Annual Progress Reports, Project Completion Reports, Utilisation Certificates are submitted regularly to the concerned authority within the stipulated time.</li>
                                <li>To motivate the faculty members to publish the research papers in reputed Peer Reviewed Journals of at least 10 years standing.</li>
                                <li>To maintain a record of faculty publications.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var ele=document.getElementById("change-text");
    let activeDiv = document.getElementsByClassNames("active")[0];
    ele.innerText=activeDiv.innerText;
</script>
<?php include './includes/footer.php' ?>