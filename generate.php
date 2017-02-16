<!doctype html>
<html  >
<head>
    <?php
    $company = $_REQUEST['company'];
    $product = $_REQUEST['product'];
    $keyword = $_REQUEST['keyword'];
    $keyword2 = $_REQUEST['keyword2'];
    $keyword3 = $_REQUEST['keyword3'];
    $industry = $_REQUEST['industry'];
    $radio = $_REQUEST['radio'];

    $flowery = array('remarkable','special','unique','exceptional','noteworthy','notable','extraordinary','unequaled','unparalleled','unmatched','unsurpassed','unrivaled','peerless','nonpareil','incomparable');
    $best = array('fine', 'great', 'top', 'paramount', 'preeminent', 'excellent', 'high quality', 'supreme');

    ?>

    <title>Blog Topic Suggestions</title>
    <script src="https://www.google.com/jsapi"
            type="text/javascript"></script>
    <script language="Javascript" type="text/javascript">
        //<!
        google.load('search', '1');

        function OnLoad() {
            // Create a search control
            var searchControl = new google.search.SearchControl();

            // Add in a full set of searchers

            searchControl.addSearcher(new google.search.WebSearch());


            // tell the searcher to draw itself and tell it where to attach
            searchControl.draw(document.getElementById("searchcontrol"));

            // execute an inital search
            searchControl.execute("<?php echo $product; ?>");
        }
        google.setOnLoadCallback(OnLoad);

        //]]>
    </script>


</head>
<body >
<?php


if(empty($company) || empty($product) || empty($keyword) || empty($keyword2) || empty($keyword3) || empty($industry) )
{
    echo "You have not filled in all of the fields.Please go back and try again.";
}
else
{ ?>

    <h1>Blog For <?php echo $company; ?> <?php echo $radio; ?></h1>
<div style="border:2px dotted grey;padding:20px; margin:20px;">
    <h1><?php echo $company; ?> is the top choice for <?php echo $industry; ?> <?php echo $radio; ?></h1>
    <p>
        <?php echo $company; ?> guarantees <?php echo $flowery[array_rand($flowery)]; ?>  <?php echo $product; ?> in the <?php echo $industry; ?> industry. If you are looking for <?php echo $product; ?>, then <?php echo $company; ?> is a great choice.
    </p>
    <!-- Keyword 1 Statement -->
    <h2>Specializing in <?php echo $keyword; ?></h2>
    <p>
       According to research, <?php $min=35; $max=68; echo rand($min,$max); ?>% of consumers struggle to find quality <?php echo $keyword; ?>. At <?php echo $company;?>, we  specialize in providing <?php  echo $best[array_rand($best)]; ?> quality products and service to our customers. Our team of <?php echo $industry; ?> experts, will work with you to provide the <?php echo $keyword; ?> that works best for your <?php echo $product; ?> needs.
    </p>
    <!-- Keyword 2 Statement -->
    <h2><?php echo $company; ?> is The Best Source for <?php echo $keyword2; ?></h2>
    <p>Finding <?php echo $keyword2; ?> to match your unique needs is something that <?php echo $company; ?> takes great pride in providing. We work with the <?php echo $industry; ?> industry's <?php echo $best[array_rand($best)];?>  vendors and specialists to provide our clients with the <?php echo $best[array_rand($best)];?> selection of <?php echo $keyword2; ?>.</p>
    <!-- Keyword 3 Statement -->
    <h2><?php echo $keyword3; ?> from <?php echo $company; ?></h2>
    Looking for <?php echo $keyword3; ?>? At <?php echo $company; ?>, we not only provide the <?php echo $industry; ?> industry's <?php echo $best[array_rand($best)];?>selection of <?php echo $keyword;?> and <?php echo $keyword2; ?>, we also specialize in delivering quality <?php echo $keyword3; ?>. Our staff works diligently to offer top-quality <?php echo $keyword3; ?> and can assist you with any questions.
    <h2>Want to learn more from <?php echo $company; ?>?</h2>
   <p>What do you think about <?php echo $product; ?>?  At <?php echo $company; ?>, we're dedicated to providing the latest news and information about the <?php echo $industry; ?> industry. If you would like to learn more about <?php echo $product; ?>, <?php echo $keyword; ?>, <?php echo $keyword2; ?>, or <?php echo $keyword3; ?>, contact us. We are the experts in <?php echo $product; ?> topics and look forward to working with you.</p>
    <p>
        To order <?php echo $product; ?>, click here. Have more questions about our <?php echo $product; ?>? Contact <?php echo $company; ?> today or send us a message on social media!
    </p>
</div>
    <h1>Top Search Results for "<?php echo $product; ?>"</h1>
    <div id="searchcontrol">Loading</div>


<?php }
?>

</body>
</html>
