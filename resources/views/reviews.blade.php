<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <style>
        .fa-star {
            font-size: 2em;
            /* Adjust this value to make the stars larger or smaller */
        }
    </style>
</head>

<body>

    <!--Titles Tag-->
    <div class="flex items-center justify-center">

        <div class="w-6/12 pb-5 pr-10 mt-10 bg-white shadow-2xl rounded-xl">
            <h1 class="pt-10 pl-10 mb-5 text-2xl font-bold">Leave us a Review!</h1>
            <p class="pl-10 mb-5">Hello valued customer! Your feedback is invaluable. Share us your experience with our product, service, and appointment system. Your review not only helps us improve but also aids others in making informed decisions. Thanks for being part of our journey.</p>

            <!-- Rate us -->
            <div class="w-11/12 p-5 mb-0 ml-10 bg-white rounded ">
                <form>
                    <div class="flex flex-col items-center mb-2">
                        <div class="flex flex-col items-center">
                            <label class="mb-2 text-2xl font-bold text-center text-gray-700" for="rating">Skill</label>
                            <div id="stars1" class="flex justify-center mt-2 mb-5">
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                            </div>
                        </div>

                        <div class="flex flex-col items-center">
                            <label class="mb-2 text-2xl font-bold text-center text-gray-700" for="rating">Approachability</label>
                            <div id="stars1" class="flex justify-center mt-2 mb-5">
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                            </div>
                        </div>


                        <div class="flex flex-col items-center">
                            <label class="mb-2 text-2xl font-bold text-center text-gray-700" for="rating">Communication</label>
                            <div id="stars1" class="flex justify-center mt-2 mb-5">
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                            </div>
                        </div>


                        <div class="flex flex-col items-center">
                            <label class="mb-2 text-2xl font-bold text-center text-gray-700" for="rating">Fulfilling Request </label>
                            <div id="stars1" class="flex justify-center mt-2 mb-5">
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                            </div>
                        </div>

                        <div class="flex flex-col items-center">
                            <label class="mb-2 text-2xl font-bold text-center text-gray-700" for="rating">Overall Experience</label>
                            <div id="stars1" class="flex justify-center mt-2 mb-5">
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                                <span class="mr-2 text-gray-400 fa fa-star"></span>
                            </div>
                        </div>

                    </div>
            </div>
            <div class="flex justify-center pr-10 mt-4">
                <button class="w-32 h-12 px-4 py-2 text-xl font-thin text-white rounded-xl bg-customcolor3 hover:bg-customcolor2">
                    Submit
                </button>
                <a href="/profile" class="justify-center w-32 h-12 px-4 py-2 ml-4 text-xl font-thin text-white bg-red-500 font-inter pl-9 rounded-xl hover:bg-red-400">
                    Cancel
                </a>


            </div>

            </form>


        </div>

    </div>
    </div>

    <script>
        $(function() {
            $(".fa-star").mouseover(function() {
                var index = $(this).index();
                var parent = $(this).parent();
                parent.children(".fa-star").each(function(i) {
                    if (i <= index) {
                        $(this).addClass("text-orange-500");
                    } else {
                        $(this).removeClass("text-orange-500").addClass("text-gray-400");
                    }
                });
            }).mouseout(function() {
                var parent = $(this).parent();
                var permanentlyFilled = parent.children().filter('.text-orange-500');
                parent.children(".fa-star").not(permanentlyFilled).removeClass("text-orange-500").addClass("text-gray-400");
            });

            $(".fa-star").click(function() {
                var index = $(this).index();
                var ratingGroup = $(this).closest("[id^='stars']");
                var ratingGroupId = ratingGroup.attr('id');

                $(this).parent().children(".fa-star").each(function(i) {
                    if (i <= index) {
                        $(this).addClass("text-orange-500");
                    } else {
                        $(this).removeClass("text-orange-500").addClass("text-gray-400");
                    }
                });
            });

            // Function to reset the stars to one filled star
            function resetStars(ratingGroup) {
                ratingGroup.find(".fa-star").removeClass("text-orange-500").addClass("text-gray-400");
                ratingGroup.find(".fa-star").first().addClass("text-orange-500");
            }

            // Call resetStars on each rating group when the page loads
            $(document).ready(function() {
                $(".flex.flex-col.items-center").each(function() {
                    resetStars($(this));
                });
            });
        });
    </script>


</body>

</html>