import app from 'flarum/common/app';

app.initializers.add('huoxin/test', () => {
  console.log('[huoxin/test] Hello, forum and admin!');
});
