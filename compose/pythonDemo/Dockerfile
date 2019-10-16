FROM python:3.6-alpine
ADD . /code
WORKDIR /code
RUN pip install redis flask
CMD ["python", "app.py"]


# docker-compose up
# http://localhost:50001/
# wrk -t12 -c15 -d5s http://127.0.0.1:50001/
# Requests/sec:    381.67