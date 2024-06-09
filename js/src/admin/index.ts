import app from 'flarum/admin/app';

app.initializers.add('huoxin/test', () => {
  console.log('[huoxin/test] Hello, admin!');
});
