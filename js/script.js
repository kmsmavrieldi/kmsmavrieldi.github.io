// get Channel Youtube
$.ajax({
    url: 'https://www.googleapis.com/youtube/v3/channels',
    dataType: 'json',
    method:'get',
    data:{
        'part'  : 'snippet, statistics',
        'id'    : 'UCZLEB_Oux4yjwV2YIhAlPyQ',
        'key'   : 'AIzaSyBTpyWMMNZzkZfasCzV0e2-yAlBmROawz8'  
    },
    success:function(data){
        console.log(data);
        $('#idYT').html(`
        <div class="col-md-4">
            <img src="`+data.items[0].snippet.thumbnails.default.url+`" class="img-fluid rounded-circle img-thumbnail float-start"> 
        </div>
        <div class="col-md-4">
            <h5>`+data.items[0].snippet.title+`</h5>
            <p>`+data.items[0].statistics.subscriberCount+` Subscribers </p>
        </div>
        
        `);

        $('#descYT').html(`
        <p style='text-align:justify'>`+data.items[0].snippet.description+`</p>
        `);

    }
});

// get Search Youtube such as: video and image links
$.ajax({
    url: 'https://www.googleapis.com/youtube/v3/search',
    dataType: 'json',
    method:'get',
    data:{
        'part'      : 'snippet',
        'channelId' : 'UCZLEB_Oux4yjwV2YIhAlPyQ',
        'key'       : 'AIzaSyBTpyWMMNZzkZfasCzV0e2-yAlBmROawz8',
        'maxResults': 1,
        'order'     : 'date'  
    },
    success:function(data){
        
        $('#linkVideoYT').html(`
        <a href="https://www.youtube.com/watch?v=`+data.items[0].id.videoId+`" target="_blank">
          <img src="`+data.items[0].snippet.thumbnails.medium.url+`" class="rounded img-thumbnail img-fluid" width="100%"  alt="">
        </a>
        `);
    }
});