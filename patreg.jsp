<%@ page import="java.sql.*" %>

<%
   // Retrieve the form data from the request
   String name = request.getParameter("name");
   String email = request.getParameter("email");
String phone = request.getParameter("phone");
String gender= request.getParameter("gender");
String dob = request.getParameter("dob");
String username = request.getParameter("username");
String password = request.getParameter("password");
   // JDBC connection and insertion
   try {
      // Load the JDBC driver
      Class.forName("com.mysql.cj.jdbc.Driver");

      // Establish the database connection
      
 Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306/ashu","root","munna@14321");
      // Prepare the SQL statement for insertion

      String query = "INSERT INTO pat (name,email,phone,gender,dob,username, password) VALUES ('"+name+"','"+email+"','"+phone+"','"+gender+"','"+dob+"','"+username+"','"+password+"')";
 Statement pstmt = con.createStatement();
String query1 = "INSERT INTO item_users (username, password) VALUES ('"+username+"','"+password+"')";
      Statement pstmt1 = con.createStatement();
      // Execute the SQL statement
      pstmt.executeUpdate(query);
     pstmt1.executeUpdate(query1);

      // Redirect to a success page or display a success message
      response.sendRedirect("http://localhost/ashu/index.php");
   } catch (SQLException e) {
      e.printStackTrace();
      response.sendRedirect("error.html?msg=" + e.getMessage());
   } catch (Exception e) {
      e.printStackTrace();
      response.sendRedirect("error.html?msg=An unexpected error occurred: " + e.getMessage());
   } 
%>
