<!DOCTYPE html>
<html>
    <body>
         <form action="#" method="post">
             <center>
                <table>
                    <tr>
                        <td></td>
                        <td>Send a comment to the author:</td>
                    </tr>
                    <tr>
                        <td></td> 
                        <td>(all fields required)</td>
                    </tr>
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" name="name" placeholder="Izzy's biggest fan!" required></td>
                    </tr>
                    <tr>
                        <td>Comment:</td>
                        <td><textarea name="comment" rows='5' cols='40' placeholder="Your story rocks but i have some points of improvement." required></textarea></td>
                    </tr>
                    <tr>
                        <td>e-mail:</td>
                        <td><input type="email" name="email" placeholder="" required></td>
                    </tr>
                     <tr>
                        <td></td>
                        <td><input type="checkbox" name="return" value="return" checked>Send a copy to my email</td>
                    </tr>
                    <tr>
                        <td><input type="hidden" id="story" name="story" value="everything"></td>
                    </tr>
                
                        <td></td>
                        <td><input type="submit" name="submit" value="Comment!"></td>
                    </tr>
                </table>
            </center>
        </form>
    </body>