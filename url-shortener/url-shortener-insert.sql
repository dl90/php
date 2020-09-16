INSERT INTO users (username, password)
VALUES
  ('test', 'test'),
  ('root', 'root');


INSERT INTO urls (long_url, code, user_id)
VALUES
  (
    'https://learn.bcit.ca/d2l/le/content/620637/Home',
    'comp2131',
    1
  ),
  (
    'http://comp-2131-winter-2020-hugo.s3-website-us-west-1.amazonaws.com/',
    'comp2350',
    1
  ),
  (
    'https://google.ca',
    'google',
    1
  ),
  (
    'http://youtube.com',
    'youtube',
    1
  );