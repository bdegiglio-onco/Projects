POST /api/v2/jobs HTTP/1.1
Accept: application/json
Content-Type: application/json
Zencoder-Api-Key: 6c99af9b0f827dc998556635afff65fc

{
  "utf8": "✓",
  "authenticity_token": "LRatwEtzc1xS1TYphQKPEODtyxL7Irpun/GXp9/R7nw=",
  "input": "https://dl.dropboxusercontent.com/s/s1r3fqzixph452f/Expert%20Review%20DTC.mp4",
  "output": [
    {
      "url": "http://primepresentations.s3.amazonaws.com/2014/expert-review-dtc/videos/video.mov",
      "device_profile": "mobile/baseline",
      "format": "mov",
      "video_codec": "h264",
      "audio_codec": "aac"
    }
  ]
}