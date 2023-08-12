<%@ page import="java.sql.*" %>

<%
   // Retrieve the form data from the request
String name = request.getParameter("name");
String description= request.getParameter("description");
String price = request.getParameter("price");
String image = request.getParameter("image");
   // JDBC connection and insertion
   try {
      // Load the JDBC driver
      Class.forName("com.mysql.cj.jdbc.Driver");

      // Establish the database connection
      
 Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306/ashu","root","munna@14321");
      // Prepare the SQL statement for insertion

      String query = "INSERT INTO item (name,description,price,image) VALUES ('"+name+"','"+description+"','"+price+"','"+image+"')";
 Statement pstmt = con.createStatement();
      // Execute the SQL statement
      pstmt.executeUpdate(query);
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
