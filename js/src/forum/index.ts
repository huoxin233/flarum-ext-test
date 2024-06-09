import app from 'flarum/forum/app';

app.initializers.add('huoxin/test', () => {
  console.log('[huoxin/test] Hello, forum!');
});
