from flask import Flask, render_template,Response,request,jsonify
from video_testing import VideoCamera
from flask import redirect,url_for
import os
from PIL import Image
#from mains.utils import pipeline_model
#from wtforms import Form, BooleanField, StringField, PasswordField, validators
#from predictors import RegressionPredictor, CNNPredictor
import numpy as np




app = Flask(__name__)

@app.route('/')
def index():
    return render_template('video_index.html')
    
def gen(video_testing):
    while True:
        frame = video_testing.get_frame()
        yield (b'--frame\r\n'

               b'Content-Type: image/jpeg\r\n\r\n' + frame + b'\r\n\r\n')

@app.route('/video_feed')
def video_feed():
    return Response(gen(VideoCamera()),
                    mimetype='multipart/x-mixed-replace; boundary=frame')

if __name__ == '__main__':

    app.run()