$( document ).ready(function() {
    var w = window.innerWidth;
   
    if(w > 767){
        $('#menu-jk').scrollToFixed();
    }else{
        $('#menu-jk').scrollToFixed();
    }
    
})




$(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });
    
    if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");
$(document).ready(function () {
    var w = window.innerWidth;
    $('#menu-jk').scrollToFixed();

    $(".filter-button").click(function () {
        var value = $(this).attr('data-filter');

        if (value === "all") {
            $('.filter').show(1000);
        } else {
            $(".filter").not('.' + value).hide(3000);
            $('.filter').filter('.' + value).show(3000);
        }

        // Set active class properly
        $(".filter-button").removeClass("active");
        $(this).addClass("active");
    });
});

$(document).ready(function () {
    // Fix the header
    $('#menu-jk').scrollToFixed();

    // Filter buttons click event
    $(".filter-button").click(function () {
        var value = $(this).attr('data-filter');

        if (value === "all") {
            $('.filter').show(1000);
        } else {
            $(".filter").not('.' + value).hide(3000);
            $('.filter').filter('.' + value).show(3000);
        }

        // Set active class properly
        $(".filter-button").removeClass("active");
        $(this).addClass("active");
    });

    // Chatbot logic
    <body>
    <div class="chatbox">
        <h2>Hospital Chatbot</h2>
        <div id="chatlog"></div>
        <form id="chat-form">
            <input type="text" id="userInput" placeholder="Ask me anything...">
            <input type="submit" value="Send">
        </form>
    </div>

    <script>
        const form = document.getElementById('chat-form');
        const input = document.getElementById('userInput');
        const chatlog = document.getElementById('chatlog');

        form.onsubmit = async function(e) {
            e.preventDefault();
            const userText = input.value;
            chatlog.innerHTML += "<div><b>You:</b> " + userText + "</div>";

            const response = await fetch("chatbot.php", {
                method: "POST",
                headers: { "Content-Type": "application/x-www-form-urlencoded" },
                body: "message=" + encodeURIComponent(userText)
            });

            const botReply = await response.text();
            chatlog.innerHTML += "<div><b>Bot:</b> " + botReply + "</div>";
            input.value = "";
            chatlog.scrollTop = chatlog.scrollHeight;
        };
    </script>
</body>
</html>

