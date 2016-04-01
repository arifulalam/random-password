# random-password
This is a simple php class which generate random password

```
$random_password = new RandomPassword();

echo '<br/>' . $random_password;
```
```
$random_password = new RandomPassword(15, 'alpha');

echo '<br/>' . $random_password;
```
```
$random_password = new RandomPassword(8, 'numeric');

echo '<br/>' . $random_password;
```
```
$random_password = new RandomPassword(13, 'alphanumeric');

echo '<br/>' . $random_password;
```
```
$random_password = new RandomPassword(19, 'mix');

echo '<br/>' . $random_password;
```
