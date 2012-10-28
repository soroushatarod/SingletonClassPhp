<h1>A resuable Singleton Class in PHP</h1>
A base Singleton class that can be used in a generic way.
All you have to do is just extend it and your class will turn into Singleton
<h2>Important source files</h2>
singleton.php - The Singleton Class <br />
testClass.php - A sample class writen that extends Singleton Class <br />
index.php - Demonstration how to use the Singleton Class<br />
<br />
<h2>Usage</h2>
<p>To use this class, you just have to extend it
<pre>
class db extends Singleton{
		//anything here
}
</pre>
<p>To create object you would do like so:</p>
<pre> $newDb = db::getInstance(); </pre>


