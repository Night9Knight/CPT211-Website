﻿<?php
	/*starts the session, with this, data can be move through multiple pages with this function*/
	session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <title>C++ Principles of Programming</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="ISO_C++_Logo.ico" type="image/x-icon">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<script src="ver1.js"></script>


<body style="font-family:Verdana;color:black;">
  <section>
    <div class="topbar">
      <h1><img src="ISO_C++_Logo.svg" alt="ISO C++ Logo">C++ Principles of Programming</h1>
    </div>
  </section>

  <div id="mainbody">
    <div class="menu">
      <ul>
        <li id="title_list"><a href="#">Section</a></li>
        <li>
          <a class="button" href="#basic"><i class="material-icons">keyboard</i> Basic Elements</a>
        </li>
        <li>
          <a class="button" href="#input"><i class="material-icons">settings_ethernet</i> Input/Output</a>
        </li>
        <li>
          <a class="button" href="#control"><i class="material-icons">settings_remote</i> Control Structure</a>
        </li>
      </ul>
    </div>
	
	<div class="login-menu">
		<?php
		/*the user has logged in, hence the value for user_id is set, refer to the login.php for
		more details*/
		if(isset($_SESSION['user_id'])){
			echo '<form action="login.php" method="post">
			<ul>
			<li id="title-logout"> Welcome, '. $_SESSION['user_id'] . '</li>
			<li> <button type="submit" name="logout-submit">Logout</button> </li>
			</ul>
			</form>';
		}
		else{
			//user not logged in
		echo '<form action="login.php" method="post">
			<ul>
			<li id="title-login">Login</li>
			<li> <input type="text" name="username" placeholder="username" /> </li>
			<li> <input type="password" name="password" placeholder="password" /> </li>
			<li> <button type="submit" name="login-submit">Login</button> </li>
			<li> <button type="submit" name="signup-submit">Sign Up</button> </li>
			</ul>
		</form>';
		}
		?>
	</div>
	
    <div class="main">
      <div id="basic">
        <h2>1. Basic Elements of C++</h2>
        <br>
        <h3><u>The Basics of a C++ Program</u></h3>
        <h4>Comments</h4>
        <p>
          The program that you write should be clear not only to you, but also to the reader of
          your program. Part of good programming is the inclusion of comments in the program.
          Typically, comments can be used to identify the authors of the program, give the date
          when the program is written or modified, give a brief explanation of the program, and
          explain the meaning of key statements in a program. In the programming examples, for
          the programs that we write, we will not include the date when the program is written,
          consistent with the standard convention for writing such books.</p>
        <p>Single-line comments begin with // and can be placed anywhere in the line. Everything
          encountered in that line after // is ignored by the compiler. For example, consider the
          following statement:</p>
        <img src="basic1.png" alt="Basic 1" style="height:20px">
        <p>You can put comments at the end of this line as follows:</p>
        <img src="basic2.png" alt="Basic 2" style="height:20px">
        <p>This comment could be meaningful for a beginning programmer.</p>
        <p>Multiple-line comments are enclosed between /* and */. The compiler ignores anything
          that appears between /* and */. For example, the following is an example of a multiple-line
          comment:</p>
        <img src="basic3.png" alt="Basic3" style="height:70px">

        <h4>Special Symbols</h4>
        <p>The smallest individual unit of a program written in any language is called a token.
          C++’s tokens are divided into special symbols, word symbols, and identifiers.
          Following are some of the special symbols:</p>
        <img src="basic4.png" alt="Basic4" style="height:70px">

        <h4>Reserved Words (Keywords)</h4>
        <p>A second category of tokens is reserved word symbols. Some of the reserved word symbols
          include the following:</p>
        <img src="basic5.png" alt="Basic5" style="height:30px">
        <p>Reserved words are also called keywords. The letters that make up a reserved word are
          always lowercase. Like the special symbols, each is considered to be a single symbol.
          Furthermore, reserved words cannot be redefined within any program; that is, they
          cannot be used for anything other than their intended use.</p>

        <h4>Identifiers</h4>
        <p>A third category of tokens is identifiers. Identifiers are names of things that appear in
          programs, such as variables, constants, and functions. All identifiers must obey C++’s
          rules for identifiers.</p>
        <p>Identifier: A C++ identifier consists of letters, digits, and the underscore character (_ )
          and must begin with a letter or underscore.</p>
        <p>Identifiers can be made of only letters, digits, and the underscore character; no other
          symbols are permitted to form an identifier.</p>
        <img src="basic6.png" alt="Basic6" style="height:210px">

        <h4>Whitespaces</h4>
        <p>Every C++ program contains whitespaces. Whitespaces include blanks, tabs, and newline
          characters. In a C++ program, whitespaces are used to separate special symbols, reserved
          words, and identifiers. Whitespaces are nonprintable in the sense that when they are
          printed on a white sheet of paper, the space between special symbols, reserved words, and
          identifiers is white. Proper utilization of whitespaces in a program is important. They can
          be used to make the program more readable.</p>

        <h3><u>Data Types</u></h3>
        <h4>Simple Data Types</h4>
        <p>The simple data type is the fundamental data type in C++ because it becomes a building
          block for the structured data type, which you will start learning about in Chapter 8.
          There are three categories of simple data: integral, floating-point and enumuration &#40; will be covered in later chapters &#41;.</p>

        <h5>Integral:</h5>
        <img src="basic7.png" alt="Basic7" style="height:200px">
        <h5>Floating-point:</h5>
        <img src="basic8.png" alt="Basic8" style="height:200px">

        <h3><u>Data Types, Variables, and Assignment Statements</u></h3>
        <p>Now that we know how to define an identifier, what a data type is, and the term variable,
          we can show how to declare a variable. When we declare a variable, not only do we
          specify the name of the variable, we also specify what type of data a variable can store. A
          syntax rule to declare a variable is:</p>
        <p>dataType identifier;</p>
        <p>For example, consider the following statements:</p>
        <img src="basic9.png" alt="Basic9" style="height:70px">
        <p>In the first statement, we are telling the system to allocate four bytes of memory space to
          store an int value and name that memory space counter. That is, counter is a variable
          that can store an int value. Similarly, interestRate is a variable that can store a value
          of type double; and grade is a variable that can store a value of type char.</p>
        <p>One way to store a value in a variable is by using an assignment statement, which takes
          the following form:</p>
        <p>variable = expression;</p>
        <p>where expression is evaluated and its value is assigned to variable. In C++, = is called
          the assignment operator.</p>
        <p>For example, consider the following statements:</p>
        <img src="basic10.png" alt="Basic10" style="height:70px">
        <p>The first statement stores 5 in the variable counter, the second statement stores 0.05 in
          interestRate, and the third statement stores the character 'A' in grade. We will discuss assignment statements in detail later in this chapter.</p>

        <h3><u>Arithmetic Operators, Operator Precedence, and Expressions</u></h3>
        <p>One of the most important uses of a computer is its ability to calculate. You can use the
          standard arithmetic operators to manipulate integral and floating-point data types. There
          are five arithmetic operators:</p>
        <p>Arithmetic Operators: &#43; &#40;addition), &#45; &#40;subtraction or negation&#41;, &#42; &#40;multiplication&#41;, /
          &#40;division&#41;, &#37; &#40;mod, &#40;modulus or remainder&#41;&#41;</p>
        <p>You can use the operators +, -, *, and / with both integral and floatingpoint
          data types. These operators work with integral and floating-point
          data the same way as you learned in a college algebra course.</p>
        <p>When you use / with the integral data type, it gives the quotient in
          ordinary division. That is, integral division truncates any fractional part;
          there is no rounding.</p>
        <p>You use % with only the integral data type, to find the remainder in
          ordinary division.</p>
        <h4>Order of Precedence</h4>
        <p>When more than one arithmetic operator is used in an expression, C++ uses the operator
          precedence rules to evaluate the expression. According to the order of precedence rules
          for arithmetic operators,</p>
        <pre><p><b>&#9;&#42;,&nbsp; /,&nbsp; &#37; </b></p></pre>
        <p>are at a higher level of precedence than</p>
        <pre><p><b>&#9;&#43;,&nbsp; &#45;</b></p></pre>
        <p>Note that the operators *, /, and % have the same level of precedence. Similarly, the
          operators + and - have the same level of precedence.</p>
        <p>When operators have the same level of precedence, the operations are performed from
          left to right. To avoid confusion, you can use parentheses to group arithmetic expressions.
          For example, using the order of precedence rules,</p>
        <img src="basic11.png" alt="Basic11" style="height:170px">
      </div>
      <!-- <hr>-->
      <div id="input">
        <h2>2. Input/Output</h2>
        <p>C++ uses a convenient abstraction called streams to perform input and output operations in sequential media such as the screen, the keyboard or a file. A stream is an entity where a program can either insert or extract characters to/from.
          There is no need to know details about the media associated to the stream or any of its internal specifications. All we need to know is that streams are a source/destination of characters, and that these characters are provided/accepted
          sequentially (i.e., one after another).</p>
        <p>The standard library defines a handful of stream objects that can be used to access what are considered the standard sources and destinations of characters by the environment where the program runs:</p>
        <img src="input1.png" alt="Input1" style="height:120px">

        <h3><u>Standard output (cout)</u></h3>
        <p>On most program environments, the standard output by default is the screen, and the C++ stream object defined to access it is cout.</p>
        <p>For formatted output operations, cout is used together with the insertion operator, which is written as << (i.e., two "less than" signs). </p> <img src="input2.png" alt="Input2" style="height:70px">
            <p>The &#60;&#60; operator inserts the data that follows it into the stream that precedes it. In the examples above, it inserted the literal string Output sentence, the number 120, and the value of variable x into the standard output
              stream
              cout. Notice that the sentence in the first statement is enclosed in double quotes (") because it is a string literal, while in the last one, x is not. The double quoting is what makes the difference; when the text is enclosed between
              them, the text is printed literally; when they are not, the text is interpreted as the identifier of a variable, and its value is printed instead. For example, these two sentences have very different results:</p>
            <img src="input3.png" alt="Input3" style="height:60px">
            <p>To insert a line break, a new-line character shall be inserted at the exact position the line should be broken. In C++, a new-line character can be specified as \n &#40;i.e., a backslash character followed by a lowercase n&#41;. For
              example:</p>
            <img src="input4.png" alt="Input4" style="height:70px">
            <p>This produces the following output: </p>
            <img src="input5.png" alt="Input5" style="height:70px">
            <p>Alternatively, the endl manipulator can also be used to break lines. For example: </p>
            <img src="input6.png" alt="Input6" style="height:60px">
            <p>This would print:</p>
            <img src="input7.png" alt="Input7" style="height:60px">

            <h3><u>Standard input (cin)</u></h3>
            <p>In most program environments, the standard input by default is the keyboard, and the C++ stream object defined to access it is cin.</p>
            <p>For formatted input operations, cin is used together with the extraction operator, which is written as >> (i.e., two "greater than" signs). This operator is then followed by the variable where the extracted data is stored. For example:
            </p>
            <img src="input8.png" alt="Input8" style="height:70px">
            <p>The first statement declares a variable of type int called age, and the second extracts from cin a value to be stored in it. This operation makes the program wait for input from cin; generally, this means that the program will wait for
              the user to enter some sequence with the keyboard. In this case, note that the characters introduced using the keyboard are only transmitted to the program when the ENTER (or RETURN) key is pressed. Once the statement with the
              extraction operation on cin is reached, the program will wait for as long as needed until some input is introduced.</p>
            <p>The extraction operation on cin uses the type of the variable after the >> operator to determine how it interprets the characters read from the input; if it is an integer, the format expected is a series of digits, if a string a
              sequence of characters, etc.</p>
            <img src="input9.png" alt="Input9" style="height:250px">
            <p>As you can see, extracting from cin seems to make the task of getting input from the standard input pretty simple and straightforward. But this method also has a big drawback. What happens in the example above if the user enters
              something else that cannot be interpreted as an integer? Well, in this case, the extraction operation fails. And this, by default, lets the program continue without setting a value for variable i, producing undetermined results if the
              value of i is used later. </p>
            <p>This is very poor program behavior. Most programs are expected to behave in an expected manner no matter what the user types, handling invalid values appropriately. Only very simple programs should rely on values extracted directly
              from cin without further checking. A little later we will see how stringstreams can be used to have better control over user input.</p>
            <p>Extractions on cin can also be chained to request more than one datum in a single statement: </p>
            <img src="input10.png" alt="Input10" style="height:50px">
            <p>This is equivalent to:</p>
            <img src="input11.png" alt="Input11" style="height:70px">
            <p>In both cases, the user is expected to introduce two values, one for variable a, and another for variable b. Any kind of space is used to separate two consecutive input operations; this may either be a space, a tab, or a new-line
              character.</p>

            <h3><u>cin and strings</u></h3>
            <p>The extraction operator can be used on cin to get strings of characters in the same way as with fundamental data types:</p>
            <img src="input12.png" alt="Input12" style="height:70px">
            <p>However, cin extraction always considers spaces (whitespaces, tabs, new-line...) as terminating the value being extracted, and thus extracting a string means to always extract a single word, not a phrase or an entire sentence.</p>
            <p>To get an entire line from cin, there exists a function, called getline, that takes the stream (cin) as first argument, and the string variable as second. For example:</p>
            <img src="input13.png" alt="Input13" style="height:250px">
            <p>Notice how in both calls to getline, we used the same string identifier (mystr). What the program does in the second call is simply replace the previous content with the new one that is introduced.</p>
            <p>The standard behavior that most users expect from a console program is that each time the program queries the user for input, the user introduces the field, and then presses ENTER (or RETURN). That is to say, input is generally
              expected to happen in terms of lines on console programs, and this can be achieved by using getline to obtain input from the user. Therefore, unless you have a strong reason not to, you should always use getline to get input in your
              console programs instead of extracting from cin.</p>
      </div>
      <!-- <hr> -->
      <div id="control">
        <h2>3. Control Structure</h2>
        <h3>Types of Control Structure</h3>
        <p>There are 3 types of control structure in C++ which are:</p>
        <p> 1. Sequential</p>
        <p>&#8195;&#8195;&#8195; Sequential control structure is executed in sequential code statements (one line after the next line). </p>
        <p> 2. Selection</p>
        <p>&#8195;&#8195;&#8195; Selection control structure is executed in selectively way. Such control structure is oftenly used for decision or branching.
          Selection control structure can be resulting more than 1 alternative paths and outputs. </p>
        <p> 3. Repetition</p>
        <p>&#8195;&#8195;&#8195; Repetition control structure is used for looping, repeating the codes for multiple times until the pre-condition(s) is/are not meet anymore. </p>
        <br>
        <p> These all control structures can be executed by using certain reserved words in C++ except sequential control structure which does not require any preserve word to be executed. </p>
        <br>
        <h3>Reserved Words for Control Structure</h3>
        <p> 1. if, else if, else</p>
        <p> 'if', 'else if' and 'else' are reserved words for selection control structure. These 3 reserved words are used with a pre-condition as expression in the parentheses '(' and ')'.
          'else if' and 'else' are reserved words only can be used if there is 'if' code statement before them.
          Besides that, their relations are associated to the most recent 'if' code statement that doesn't paired with any 'else' code statement.
          Image shown below is its synthax.</p>
        <img src="if.png" alt="if,else if, else img" style="height:100px">
        <p> If the value of the expression is true, the statement will be executed and the other statements below will be bypassed.
          Otherwise, the current statement will be bypassed and the next following expression will be evaluated and the statement will be determined to be executed or not.</p>
        <br>
        <p> 2. switch...case</p>
        <p> 'switch' and 'case' are reserved words used in selection control structure as well.
          These reserved words are normally used for the intention of allowing user to be able to choose their selection.
          'break' and 'default' are also the other reserved words used in 'switch' selection control structure.
          Following image shows its synthax.</p>
        <img src="switch.png" alt="switch...case img" style="height:300px">
        <p> When a case value is matched, all statements starting from that particular case will be executed until a 'break' word is encountered.
          A 'break' word may or may not appear after each case and it causes an immediate exit from the whole switch, bypassed any following statements.
          'default' is a reserved word act similary to 'case' but it's called for the situation when none of the case value is matched within the switch. </p>
        <br>
        <p> 3. do...while</p>
        <p> 'do' and 'while' are reserved words to be used in repetition control structure, often named as 'do...while' loop.
          This 'do' repetition control structure is speacial from the other repetition control structure due to its way of execution.
          Any statements after the 'do' word and before the 'while' code statement will be executed sequentially at least once and its expression will be only evaluated after the first execution.
          Following image shows its synthax.</p>
        <img src="do.png" alt="do...while img" style="height:120px">
        <br>
        <p> 4. for</p>
        <p> 'for' is reserved words to be used in repetition control structure as well, often named as 'for' loop.
          Image shown below is its synthax.</p>
        <img src="for.png" alt="for img" style="height:100px">
        <p> initialization is the initial value of certain data type which to be used as a flag.
          test expression is the pre-condition for the 'for' loop to be executed and repeated.
          update is the execution of statement repeatedly after whole 'for' loop has been executed every once.
          The whole statement within 'for' loop will be executed and repeated until the pre-condition is not meet anymore.</p>
        <br>
        <p> 5. while</p>
        <p> 'while' is a reserved word for repetition control structure, often named as 'while' loop.
          'while' loop is differently from 'do...while' loop. The expression of 'while' loop will evaluated first before any execution of statement within the 'while' loop.
          'while' loop will be executed repeatedly until the expression isn't true anymore.
          Following image shows its synthax.</p>
        <img src="while.png" alt="while img" style="height:120px">
        <br>
        <h3>Operators</h3>
        <p> There are several operator in C++ which are used in expression or statement in order to value the expression and directly linked to the execution of control structure.
          Some of the useful operators in expression are listed as below.</p>
        <p> 1. ==, !=, &lt;, &lt;=, &gt;, &gt;=</p>
        <p>&#8195;&#8195;&#8195; '==', '!=', '&lt;', '&lt;=', '&gt;', '&gt;=' are comparison operators which are used to compare identifier.</p>
        <p> 2. +, -, *, /, %</p>
        <p>&#8195;&#8195;&#8195; '+', '-', '*', '/', '%' are arithmetic operators which are used to execute arithmetic operation.</p>
        <p> 3. ++, --</p>
        <p>&#8195;&#8195;&#8195; '++', '--' are operators that are used for increment and decrement of value of identifier respectively.</p>
        <p> 4. !, &amp;&amp;, ||</p>
        <p>&#8195;&#8195;&#8195; '!', '&amp;&amp;', '||' are logical operators that are used for Boolean operation NOT, AND and OR respectively.</p>
      </div>
    </div>

  </div>
  
  <div class="comment">
  <p><b>Comment Section:</b></p>
  <?php
  /*Create Text Box for Comment Section*/
  echo
  '<form action="#" method="post">
<textarea id="note" rows="6" cols="205" placeholder="Write something here..."></textarea>
</form>'
?>
</div>

  <div style="background-color:#e5e5e5;text-align:left;padding:5px">
    Contact us:
    <br>
    1. Harold Bong Jing Choy - 140765 &emsp; 2. Chan Siang Sheng - 142413 &emsp; 3. Tang Wen Shuen - 142623
    <br>
    4. Teh Zhen Rong - 143955 &emsp; 5. Suen Kee Xian - 142215
  </div>

</body>

</html>
