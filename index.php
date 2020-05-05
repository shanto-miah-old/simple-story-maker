<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Simple Story maker</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
	<div class="container py-4 ">
		<div class="display-4 d-flex justify-content-center">WELCOME</div>
		<p class="lead d-flex justify-content-center">
			To Simple Story Maker System
		</p>
	</div>

	<?php if (!isset($_POST['f'])) { ?>

		<div class="container py-4">
		<div class="row justify-content-center">
			<div class="col-md-6">

				<p>Enter Your five firends name</p>

				<form method="post">

					<div class="form-group">
						<label>Firends Name</label>
						<input type="text" name="f[]" autocomplete="false" class="form-control mb-3" placeholder="One" required="true">
						<input type="text" name="f[]" autocomplete="false" class="form-control mb-3" placeholder="Two" required="true">
						<input type="text" name="f[]" autocomplete="false" class="form-control mb-3" placeholder="Three" required="true">
						<input type="text" name="f[]" autocomplete="false" class="form-control mb-3" placeholder="Four" required="true">
						<input type="text" name="f[]" autocomplete="false" class="form-control mb-3" placeholder="Five" required="true">
						<small id="emailHelp" class="form-text text-muted">This name field are require</small>
					</div>

					<div class="form-group d-flex justify-content-between">
						<input type="reset" class="btn btn-danger" value="Reset">
						<input type="submit" class="btn btn-primary" value="Next">
					</div>


				</form>

			</div>
		</div>
	</div>

	<?php } else {

		$firends = $_POST['f'];
		shuffle($firends);

		$story = "একদিন ".$firends[0]." স্বপ্ন দেখল ".$firends[1]." আমেরিকার প্রেসিডেন্ট নির্বাচিত হয়েছে। প্রেসিডেন্ট হয়ে ".$firends[1]." তালেবানদের বিরুদ্ধে যুদ্ধ ঘোষণা করে। ".$firends[2]." হলো তালেবান নেতা। প্রেসিডেন্ট ".$firends[1]." মেজর ".$firends[3]." কে পাকিস্তানে পাঠাল তালেবানের বিরুদ্ধে যুদ্ধ করতে। সেখানে ".$firends[3]." আর ".$firends[2]." এর মধ্যে অনেকক্ষণ যুদ্ধ চলে। যুদ্ধে কোনো পক্ষ জিততে না পেরে অবশেষে প্রেসিডেন্ট ".$firends[1]." এর পক্ষ থেকে মেজর ".$firends[3]." তালেবান নেতা ".$firends[2]." এর সাথে গোপন বৈঠক আহ্বান করে। বৈঠকে ".$firends[2].$firends[1]." আর ".$firends[3]." সবাই পাকিস্তানে আরো কিছুদিন অস্থিতিশীল অবস্থা চালু রেখে সেখানকার শাসনব্যবস্থা দুর্বল করে ফেলার সিদ্ধান্ত নেয়। তারপর একদিন যখন পাকিস্তান সম্পুর্ন দুর্বল হয়ে পড়বে. তখন বাংলাদেশকে দিয়ে ".$firends[4]." এর নেতৃত্বে পাকিস্তানে হামলা চালাবে। এভাবে বাংলাদেশ পাকিস্তানকে স্বাধীন করে ফেলবে- এই গোপন চক্রান্ত স্থির হয় বৈঠকে। \n ঘুম ভাঙার পর ".$firends[0]." জানল. ঘুমের সময় ".$firends[1]. " , ".$firends[2]." , ".$firends[3]."  আর ".$firends[4]." মিলে তার কৃত্রিম দাড়িমোছ একে দেওয়ার চক্রান্ত করছিল। কিন্তু তাড়াতাড়ি ঘুম ভাঙ্গায়, সেটা আর সম্ভব হয় নি!";
	?>

		<div class="container">
			<div class="alert alert-success">
				<?php echo($story); ?>
			</div>

			<div class="text-center py-4">
				<a href="" class="btn btn-lg btn-info">
					New Story
				</a>
			</div>
		</div>

	<?php } ?>


	<div class="bg-dark py-4 text-light">

		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h4>Who i am?</h4>
					<p class="lead">
						My name is Shanto. <a href="//shantoisonline.com" class="card-link" target="_blank">See more...</a>
					</p>
				</div>

				<div class="col-md-4">
					<h4>Inspired by</h4>
					<p class="lead">
						<a href="https://facebook.com/profile.php?id=100010406086440" class="card-link" target="_blank">Shariful Islam</a>
					</p>
				</div>

				<div class="col-md-4">
					<h4>Source Code</h4>
					<p class="lead">
						<a href="https://github.com/shanto-miah/simple-story-maker" class="card-link" target="_blank">Github</a>
					</p>
				</div>

			</div>
		</div>

	</div>
</body>
</html>