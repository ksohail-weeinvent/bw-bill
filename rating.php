<?php
//ok do this
print_r($_GET);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Star rating</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form method="get" action="rating.php">

      <fieldset class="star-rating">
        <legend class="star-rating__title">Your rating:</legend>
        <div class="star-rating__stars">
          <input class="star-rating__input" type="radio" name="rating" value="1" id="rating-1" />
          <label class="star-rating__label" for="rating-1" aria-label="One"></label>
          <input class="star-rating__input" type="radio" name="rating" value="2" id="rating-2" />
          <label class="star-rating__label" for="rating-2" aria-label="Two"></label>
          <input class="star-rating__input" type="radio" name="rating" value="3" id="rating-3" />
          <label class="star-rating__label" for="rating-3" aria-label="Three"></label>
          <input class="star-rating__input" type="radio" name="rating" value="4" id="rating-4" />
          <label class="star-rating__label" for="rating-4" aria-label="Four"></label>
          <input class="star-rating__input" type="radio" name="rating" value="5" id="rating-5" />
          <label class="star-rating__label" for="rating-5" aria-label="Five"></label>
          <div class="star-rating__focus"></div>
        </div>
      </fieldset>

      <fieldset class="star-rating">
        <legend class="star-rating__title">Rate your review:</legend>
        <div class="star-rating__stars">
          <input class="star-rating__input" type="radio" name="review" value="1" id="review-1" />
          <label class="star-rating__label" for="review-1" aria-label="One"></label>
          <input class="star-rating__input" type="radio" name="review" value="2" id="review-2" />
          <label class="star-rating__label" for="review-2" aria-label="Two"></label>
          <input class="star-rating__input" type="radio" name="review" value="3" id="review-3" />
          <label class="star-rating__label" for="review-3" aria-label="Three"></label>
          <input class="star-rating__input" type="radio" name="review" value="4" id="review-4" />
          <label class="star-rating__label" for="review-4" aria-label="Four"></label>
          <input class="star-rating__input" type="radio" name="review" value="5" id="review-5" />
          <label class="star-rating__label" for="review-5" aria-label="Five"></label>
          <div class="star-rating__focus"></div>
        </div>
      </fieldset>

      <fieldset class="star-rating">
        <legend class="star-rating__title">Your feedback:</legend>
        <div class="star-rating__stars">
          <input class="star-rating__input" type="radio" name="feedback" value="1" id="feedback-1" />
          <label class="star-rating__label" for="feedback-1" aria-label="One"></label>
          <input class="star-rating__input" type="radio" name="feedback" value="2" id="feedback-2" />
          <label class="star-rating__label" for="feedback-2" aria-label="Two"></label>
          <input class="star-rating__input" type="radio" name="feedback" value="3" id="feedback-3" />
          <label class="star-rating__label" for="feedback-3" aria-label="Three"></label>
          <input class="star-rating__input" type="radio" name="feedback" value="4" id="feedback-4" />
          <label class="star-rating__label" for="feedback-4" aria-label="Four"></label>
          <input class="star-rating__input" type="radio" name="feedback" value="5" id="feedback-5" />
          <label class="star-rating__label" for="feedback-5" aria-label="Five"></label>
          <div class="star-rating__focus"></div>
        </div>
      </fieldset>
      
      <fieldset class="star-rating">
        <legend class="star-rating__title">Your feedback:</legend>
        <div class="star-rating__stars">
          <input class="star-rating__input" type="radio" name="feedback1" value="1" id="feedback1-1" />
          <label class="star-rating__label" for="feedback1-1" aria-label="One"></label>
          <input class="star-rating__input" type="radio" name="feedback1" value="2" id="feedback1-2" />
          <label class="star-rating__label" for="feedback1-2" aria-label="Two"></label>
          <input class="star-rating__input" type="radio" name="feedback1" value="3" id="feedback1-3" />
          <label class="star-rating__label" for="feedback1-3" aria-label="Three"></label>
          <input class="star-rating__input" type="radio" name="feedback1" value="4" id="feedback1-4" />
          <label class="star-rating__label" for="feedback1-4" aria-label="Four"></label>
          <input class="star-rating__input" type="radio" name="feedback1" value="5" id="feedback1-5" />
          <label class="star-rating__label" for="feedback1-5" aria-label="Five"></label>
          <div class="star-rating__focus"></div>
        </div>
      </fieldset>
	<input type="submit" name="id" value="sd">
    </form>
  </body>
</html>
