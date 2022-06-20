<?php

    $currentpage = "thankyou.php";
    include("header.php");

    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    $url = "#";
    if (isset($_GET['url']) ) {
        $url = urldecode($_GET['url']);
        // Only allow downloads from trusted source
        if ( !str_starts_with($url,"https://github.com/FreeCAD/FreeCAD/releases") ) {
            $url = "#";
        }
    }
?>

    <script>
        function startDownload() {
            window.location = "<?php echo($url); ?>";
        }
    </script>

    <div id="main" class="container-fluid whitelinks">

        <div class="download-notes text-center">
            <h2 class="downloads-notes-title"><?php echo _('Thank you!'); ?></h2>
            
            <p>Your download should start automatically. 
            If not, click <a href="<?php echo($url); ?>">here</a> 
            to download the file.
            </p>
            
        </div>
        
        <section class="row section d-flex justify-content-around">
            
            
          <div class="col-lg-4">
            <h3><?php echo _('Support FreeCAD!'); ?></h3>
          </div>
            
          <div class="col-lg-7 text-light text-center text-lg-left px-md-4">
            
            <p>
            If you are happy with FreeCAD, and would like to help it thrive, why 
            not donate a bit of money to the project? Paying to use FreeCAD will
            never be required, and FreeCAD does not need money to survive, but
            donations help us to go faster, further.
            </p>
            
            <p>
            If you are in, choose the amount and method of your choice below. If
            you are interested in supporting the project better with a recurring
            donation, check the <a href=sponsor.php>sponsoring page</a> to see
            more options.
            </p>
            
            <?php $formid = "donation"; include("donation.php"); ?> 
            
            <p>
            There are also many other ways to help FreeCAD. For example, you can
            write code, help writing documentation, translate the FreeCAD interface
            and documentation, help new users, etc. See all you need to know on
            the <a href="https://wiki.freecad.org/Help_FreeCAD">Help FreeCAD</a>
            page.
            </p>
            
          </div>
            

            
          <div class="col-lg-4">
            <h3><?php echo _('Help needed?'); ?></h3>
          </div>
            
          <div class="col-lg-7 text-light text-center text-lg-left px-md-4">
            
            <p>
            If you are new to FreeCAD, or to 3D CAD modelling, we have you covered!
            FreeCAD features an extensive documentation, which is available online
            but also directly within the FreeCAD application. It covers everything
            from installing and launching FreeCAD, using it and its different 
            workbenches, up to creating Python scripts to automate it and developing
            your own tools and extensions.
            </p>
            
            <p>
            Below are some pages of this documentation that could be useful to you:
            </p>
            
            <ul class="d-block whitelinks">
                <li><a href="https://wiki.freecad.org/Installing_on_Windows">Installing FreeCAD on Windows</a></li>
                <li><a href="https://wiki.freecad.org/Installing_on_Linux">Installing FreeCAD on Linux</a></li>
                <li><a href="https://wiki.freecad.org/Installing_on_Mac">Installing FreeCAD on MacOS</a></li>
                <li><a href="https://wiki.freecad.org/Installing_additional_components">Installing additional components</a></li>
                <li><a href="https://wiki.freecad.org/Getting_Started">Getting started with FreeCAD</a></li>
                <li><a href="https://wiki.freecad.org/User_hub#Migrating_from_other_software.3F">Migrating from other software?</a></li>
                <li><a href="https://wiki.freecad.org/Workbenches">Workbenches documentation</a></li>
                <li><a href="https://wiki.freecad.org/Frequently_asked_questions">Frequently asked questions</a></li>
            </ul>
            
            <p>
            FreeCAD also offers a user manual, that can be downloaded as a pdf file
            or printed:
            </p>
            
            <ul class="d-block whitelinks">
                <li><a href="https://wiki.freecad.org/Manual">The FreeCAD user manual</a></li>
            </ul>
            
            <p>
            and many tutorials, in written or video form, created by
            the FreeCAD community:
            </p>

            <ul class="d-block whitelinks">
                <li><a href="https://wiki.freecad.org/Tutorials">Tutorials</a></li>
            </ul>
            
            <p>
            On behalf of all of the worldwide community of users, developers, 
            translators, editors, writers, testers who work hard to make FreeCAD
            the best CAD modeller out there, we thank you for downloading our
            baby! We hope you'll like it as much as we do.
            </p>
            
            <p>
            If you encounter issues with FreeCAD, or would like to meet and discuss
            topics with other users, pay a visit to the the 
            <a href="ttps://forum.freecad.org">FreeCAD forum</a>. The forum is the
            main meetng point for FreeCAD users of all parts of the world and all
            skill levels. There you can seek advice of more advanced users, find
            ways to solve a particular problem, or discuss ideas about and around
            the FreeCAD world.
            </p>
            
          </div>
                        
        </section>
    </div>

<?php
    include 'footer.php'; 
?>
