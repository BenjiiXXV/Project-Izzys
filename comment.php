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
                            <!--TO BE REPLACED BY AUTO INCLUDE USERNAME-->
                        <td>Name:</td>
                        <td><input type="text" name="name" placeholder="Izzy's biggest fan!" required>&nbsp;&nbsp;(all fields required)</td>
                    </tr>
                    <tr>
                        <td>Comment:</td>
                        <td><textarea name="comment" rows='5' cols='40' placeholder="Your story rocks but i have some points of improvement." required></textarea></td>
                    </tr>
                    <tr>
                        <!--TO BE REMOVED WHEN NAME IS REPLACED BY USERNAME, CHECKBOX TO REMAIN -->
                        <td>e-mail:</td>
                        <td><input type="email" name="email" placeholder="" required>&nbsp;&nbsp;<input type="checkbox" name="return" value="return" checked>CC Me</td>
                    </tr>
                     <tr>
                        <td>
                       <input type="hidden" id="story" name="story" value="everything"></td>
                        <td style="content-align: right;"><input type="submit" name="submit" value="Comment!" class="button" style="height:40px; width:90px;"></td>
                    </tr>
                </table>
            </center>
        </form>
    </body>